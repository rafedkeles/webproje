document.getElementById("contactForm").addEventListener("submit", function(event) {
  var name = document.getElementById("name").value.trim();
  var email = document.getElementById("email").value.trim();
  var message = document.getElementById("message").value.trim();
  var gender = document.querySelector('input[name="gender"]:checked');
  var hobbies = document.querySelectorAll('input[name="u"]:checked');

  if (name === '' || email === '' || message === '' || !gender || hobbies.length === 0) {
    event.preventDefault();
    alert("Lütfen tüm alanları doldurun");
  }
});
