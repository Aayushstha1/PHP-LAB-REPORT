document.getElementById('submitBtn').addEventListener('click', function () {
    const errors = [];
    const email = document.getElementById('email').value.trim();
    const age = document.getElementById('age').value.trim();
    const password = document.getElementById('password').value.trim();
    const confirmPassword = document.getElementById('confirmPassword').value.trim();
    const zipCode = document.getElementById('zipCode').value.trim();
    const url = document.getElementById('url').value.trim();
    const date = document.getElementById('date').value.trim();
    const file = document.getElementById('file').files[0];
    const country = document.getElementById('country').value;
    const terms = document.getElementById('terms').checked;
  
    if (!email.includes('@') || !email.includes('.')) errors.push("Enter a valid email.");
  
    if (isNaN(age) || age < 1 || age > 120) errors.push("Age must be between 1 and 120.");
  
    if (password !== confirmPassword) errors.push("Passwords do not match.");
  
    if (!/^\d{5}(-\d{4})?$/.test(zipCode)) errors.push("Enter a valid zip code.");
  
    if (!url.startsWith('http://') && !url.startsWith('https://')) errors.push("Enter a valid URL.");
  
    if (new Date(date) > new Date()) errors.push("Date cannot be in the future.");
  
    const maxSize = 2 * 1024 * 1024; 
    if (file && file.size > maxSize) errors.push("File must be less than 2MB.");
  
    if (!country) errors.push("Select a country.");
  
    if (!terms) errors.push("You must agree to the terms.");
  
    const errorMessages = document.getElementById('errorMessages');
    if (errors.length > 0) {
      errorMessages.innerHTML = errors.join("<br>");
    } else {
      errorMessages.innerHTML = "Form submitted successfully!";
    }
  });
  