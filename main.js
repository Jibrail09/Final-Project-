handleFormSubmit(event) 
  event.preventDefault(); // Prevent the default form submission behavior

  // Get form input values
  const name = document.getElementById("nameInput").value.trim();
  const email = document.getElementById("emailInput").value.trim();
  const message = document.getElementById("messageInput").value.trim();

  // Perform basic validation
  if (!name || !email || !message) {
      alert("Please fill in all fields.");
      return;
  }

  // Validate email format (basic regex)
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
      alert("Please enter a valid email address.");
      return;
  }

  // Prepare form data
  const formData = { name, email, message };

  // Clear form inputs
  document.getElementById("nameInput").value = "";
  document.getElementById("emailInput").value = "";
  document.getElementById("messageInput").value = "";

  // Send form data to the server using Fetch API
  fetch("/submit-form", {
      method: "POST",
      headers: {
          "Content-Type": "application/json",
      },
      body: JSON.stringify(formData),
  })
      .then((response) => {
          if (response.ok) {
              alert("Form submitted successfully!");
          } else {
              return response.text().then((errorMessage) => {
                  throw new Error(errorMessage || "Form submission failed.");
              });
          }
      })
      .catch((error) => {
          console.error("Error:", error.message);
          alert("An error occurred: " + error.message);
      });

