# Language-Switcher-JD_CC
This repo is made for submitting the task of Constant Concept 
# Language Switcher

A dynamic language switcher web application that allows users to switch between multiple languages and see the changes instantly. The application also includes a form to submit input, which is processed via AJAX and displayed on the frontend without reloading the page.

## Features

- **Dynamic Language Switching**: Switch between multiple languages dynamically using a dropdown or toggle button.
- **AJAX Form Submission**: Submit input via AJAX to a PHP backend and display the response without reloading the page.
- **Responsive Design**: Fully responsive layout that adapts to different screen sizes.
- **Sanitized Input**: Input is sanitized on the backend to ensure security.
- **Real-Time Updates**: All content, including headers, descriptions, and buttons, updates dynamically based on the selected language.

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript (jQuery)
- **Backend**: PHP
- **AJAX**: For asynchronous communication between the frontend and backend

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/language-switcher.git
   ```

2. Move the project to your web server directory (e.g., `/c:/xampp/htdocs/` for XAMPP).

3. Start your web server (e.g., Apache for XAMPP).

4. Open the application in your browser:
   ```
   http://localhost/blackbox/
   ```

## File Structure

```
blackbox/
├── css/
│   └── style.css          # Styles for the application
├── js/
│   └── script.js          # JavaScript for dynamic updates and AJAX
├── assets/
│   └── image.png          # Placeholder image
├── process.php            # Backend PHP file for processing input
├── index.php              # Main frontend file
└── README.md              # Project documentation
```

## How It Works

1. **Language Switching**:
   - Select a language from the dropdown or use the toggle button to switch languages.
   - The content updates dynamically without reloading the page.

2. **Form Submission**:
   - Enter your name in the input field and click the "Submit" button.
   - The input is sent to the `process.php` file via AJAX.
   - The sanitized response is displayed dynamically on the frontend.

3. **Responsive Design**:
   - The layout adjusts to different screen sizes, ensuring a seamless user experience on all devices.


## Contributing

Contributions are welcome! Please fork the repository and submit a pull request with your changes.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Author

- **Md. Rashedul Alam** - [GitHub Profile](https://github.com/rashed-001)
