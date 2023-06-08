import { post } from "./WebRequest.js";

function getAllInputs(e) {
  let inputs = document.getElementsByTagName("input");

  inputs = [...inputs];

  inputs.push(document.getElementById("description"));

  return inputs;
}

function getInputValues(e) {
  const inputs = getAllInputs();

  const vals = {
    name: "",
    phone: "",
    address: "",
    description: "",
    avail: [],
  };

  for (let input of inputs) {
    if (input.name === "avail") {
      if (input.checked) {
        vals.avail.push(input.value);
      }
    } else {
      vals[input.name] = input.value;
    }
  }

  console.log(vals);

  return vals;
}

async function validateForm(e) {
  let valid = true;
  const vals = getInputValues();

  [...document.getElementsByClassName("feedback")].forEach(
    (e) => (e.innerText = "")
  );

  if (!vals.name) {
    document.getElementById("name_feedback").innerText =
      "Please enter your name.";
    valid = false;
  }

  if (!vals.phone) {
    document.getElementById("phone_feedback").innerText =
      "Please enter your phone number.";
    valid = false;
  }

  if (!vals.address) {
    document.getElementById("address_feedback").innerText =
      "Please enter your address.";
    valid = false;
  }

  if (!vals.description) {
    document.getElementById("description_feedback").innerText =
      "Please enter a description.";
    valid = false;
  }

  if (!vals.avail.length) {
    document.getElementById("avail_feedback").innerText =
      "Please select at least one preferred time option.";
    valid = false;
  }

  if (valid) {
    const result = await post(
      "../php/sendRequest.php",
      JSON.stringify({ sub: "Test Email", msg: "This is a test." })
    );
    console.log(result);
    window.location.href = "../html/appointmentConfirmation.html";
  }
}

const submit = document.getElementById("confirm_btn");

submit.onclick = validateForm;
