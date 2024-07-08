// Get the form and input fields
const form = document.getElementById('addressForm');
const countryInput = document.getElementById('inputCountry');
const citySelect = document.getElementById('inputCity');

// Add an event listener to the country input field to detect changes
countryInput.addEventListener('input', async function () {
  const country = this.value.trim();
  if (country.length === 0) {
    clearCityOptions();
    return;
  }

  try {
    const response = await fetch('https://countriesnow.space/api/v0.1/countries/cities', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ country: country })
    });

    if (!response.ok) {
      throw new Error('Failed to fetch cities');
    }

    const data = await response.json();
    const cities = data.data;

    if (!cities || cities.length === 0) {
      console.error('No cities found for country:', country);
      clearCityOptions();
      return;
    }

    clearCityOptions();

    cities.forEach(city => {
      const option = document.createElement('option');
      option.textContent = city;
      citySelect.appendChild(option);
    });
  } catch (error) {
    console.error('Error fetching cities:', error);
  }
});

// Function to clear city options
function clearCityOptions() {
  citySelect.innerHTML = '<option selected>Choose...</option>';
}

// Add an event listener to the form to handle the submit event
form.addEventListener('submit', async function (event) {
  event.preventDefault();

  if (!validateForm()) {
    return;
  }

  form.reset();
  clearCityOptions();

});

// Function to validate the form fields
function validateForm() {
  const name = document.getElementById('inputName').value.trim();
  const email = document.getElementById('inputEmail').value.trim();
  const country = document.getElementById('inputCountry').value.trim();
  const city = document.getElementById('inputCity').value.trim();
  const description = document.getElementById('inputText').value.trim();
  const element = document.getElementById('adress-form-error');

  element.classList.remove('error', 'success');

  if (name === '' || email === '' || country === '' || city === '' || description === '') {

    element.innerHTML = "Please, complete all fields"
    element.classList.add('error')

    return false;
  }

  element.innerHTML = "Form submitted successfully"
  element.classList.add('success')

  return true;
}
