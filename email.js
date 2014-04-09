
      document.getElementById("email_addr_confirm").addEventListener("input", verifyEmail);
      document.getElementById("airspeed_velocity").addEventListener("input", showAirspeed);

      function verifyEmail(input) {
        input = input.srcElement;
        if (input.value != document.getElementById('email_addr').value) {
          input.setCustomValidity('The two email addresses must match.');
        } else {
          input.setCustomValidity('');
        }
        input.nextElementSibling.innerText = input.validationMessage;
      }

      function showAirspeed(input) {
        input = input.srcElement;
        document.getElementById("asv").innerText = input.valueAsNumber;
      }

