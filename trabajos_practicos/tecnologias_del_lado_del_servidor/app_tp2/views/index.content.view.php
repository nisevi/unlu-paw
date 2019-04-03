<main>
    <h2>Appointment Request</h2>
    <form method="POST" id="appointment" action="/appointment">
        <fieldset>
            <label class="apt-form" for="name">Name</label>
            <input type="text" name="name" required>
        </fieldset>
        <fieldset>
            <label class="apt-form" for="email">Email</label>
            <input type="email" name="email" required>
        </fieldset>
        <fieldset>
            <label class="apt-form" for="phone">Phone</label>
            <input type="tel" name="phone" required>
        </fieldset>
        <fieldset>
            <label class="apt-form" for="age">Age</label>
            <input type="text" name="age">
        </fieldset>
        <fieldset>
            <label class="apt-form" for="shoessize">Shoes Size</label>
            <input type="number" min="20" max="45" step="1" name="shoessize" />
        </fieldset>
        <fieldset>
            <label class="apt-form" for="hight">Height in centimeters</label>
            <input type="range" value="180" min="0" max="500" step="0.01" name="height" onchange="rangevalue.value=value" />
            <output id="rangevalue">180</output>
        </fieldset>
        <fieldset>
            <label class="apt-form" for="birthdate">Birthdate</label>
            <input type="date" name="birthdate" required>
        </fieldset>
        <fieldset>
            <label class="apt-form" for="haircolor">Hair color</label>
            <input type="color" name="haircolor">
        </fieldset>
        <fieldset>
            <label class="apt-form" for="date">Date</label>
            <input type="date" name="date" required>
        </fieldset>
        <fieldset>
            <label class="apt-form" for="time">Time</label>
            <input type="time" name="time">
        </fieldset>
        <fieldset>
            <button id="submit" class="black-button" type="submit" form="appointment">Submit</button>
            <button id="clear" class="black-button" type="reset" form="appointment">Clear</button>
        </fieldset>
    </form>
</main>
