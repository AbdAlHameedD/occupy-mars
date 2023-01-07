$(document).ready(function () {
  // Activate tooltip
  $('[data-toggle="tooltip"]').tooltip();

  // Select/Deselect checkboxes
  var checkbox = $('table tbody input[type="checkbox"]');
  $("#selectAll").click(function () {
    if (this.checked) {
      checkbox.each(function () {
        this.checked = true;
      });
    } else {
      checkbox.each(function () {
        this.checked = false;
      });
    }
  });
  checkbox.click(function () {
    if (!this.checked) {
      $("#selectAll").prop("checked", false);
    }
  });
});

function updateRow(id, fullName, email, gender, birthDate, country) {
  const IdHiddenInput = document.createElement("input");
  IdHiddenInput.setAttribute("type", "hidden");
  IdHiddenInput.name = "id";
  IdHiddenInput.value = id;

  const updateForm = document.getElementById("updateForm");
  updateForm.appendChild(IdHiddenInput);

  document.getElementById("fname").value = fullName;
  document.getElementById("mail").value = email;
  document.getElementById("bDate").value = birthDate;
  document.getElementById("c").value = country;
  document.getElementById("g").value = gender;
}
