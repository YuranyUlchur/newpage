<!-- Contact Form -->
<h1 class="title-contact">Contact us</h1>
<form id="addressForm" class="my-4">
    <div id="adress-form-error">Please, completly all fields have</div>

    <div class="form-group">
        <input type="text" class="form-control" id="inputName" placeholder="Name" required>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="text" class="form-control" id="inputCountry" placeholder="Country" required>
        </div>
        <div class="form-group col-md-6">
            <select id="inputCity" class="form-control" required>
                <option selected>City</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" id="inputText" placeholder="Write something" required>
    </div>
    <!-- Checkbox for Terms and Conditions -->
    <div class="form-group form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck" required>
        <label class="form-check-label" for="gridCheck">
            Accept terms and conditions
        </label>
    </div>

    <button type="submit" >Submit</button>
</form>