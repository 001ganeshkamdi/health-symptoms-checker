# Contributing to Health Symptoms Checker

We love your input! We want to make contributing to Health Symptoms Checker as easy and transparent as possible, whether it's:

- Reporting a bug
- Discussing the current state of the code
- Submitting a fix
- Proposing new features
- Becoming a maintainer

## Development Process

We use GitHub to host code, to track issues and feature requests, as well as accept pull requests.

## Pull Requests

Pull requests are the best way to propose changes to the codebase. We actively welcome your pull requests:

1. Fork the repo and create your branch from `main`.
2. If you've added code that should be tested, add tests.
3. If you've changed APIs, update the documentation.
4. Ensure the test suite passes.
5. Make sure your code lints.
6. Issue that pull request!

## Any contributions you make will be under the MIT Software License

In short, when you submit code changes, your submissions are understood to be under the same [MIT License](LICENSE) that covers the project. Feel free to contact the maintainers if that's a concern.

## Report bugs using GitHub's [issue tracker]

We use GitHub issues to track public bugs. Report a bug by [opening a new issue](../../issues).

## Write bug reports with detail, background, and sample code

**Great Bug Reports** tend to have:

- A quick summary and/or background
- Steps to reproduce
  - Be specific!
  - Give sample code if you can
- What you expected would happen
- What actually happens
- Notes (possibly including why you think this might be happening, or stuff you tried that didn't work)

People *love* thorough bug reports. I'm not even kidding.

## Use a Consistent Coding Style

* 2 spaces for indentation in HTML/CSS
* 4 spaces for indentation in JavaScript/PHP
* Use meaningful variable names
* Comment your code where necessary
* Follow existing code patterns

## Code Structure

### HTML
- Use semantic HTML5 elements
- Include proper meta tags
- Ensure accessibility standards
- Use relative paths for internal resources

### CSS
- Use CSS custom properties (variables) when possible
- Follow BEM methodology for class naming
- Ensure responsive design
- Maintain dark/light theme support

### JavaScript
- Use ES6+ features
- Add proper error handling
- Include JSDoc comments for functions
- Avoid global variables

### PHP
- Use prepared statements for database queries
- Implement proper input validation
- Include error handling
- Follow PSR standards where applicable

## File Organization

- Place CSS files in `assets/css/`
- Place JavaScript files in `assets/js/`
- Place HTML pages (except index.html) in `pages/`
- Place PHP scripts in `php/`
- Place data files in `assets/data/`

## Security Guidelines

- Always use prepared statements for database queries
- Sanitize and validate all user inputs
- Escape output to prevent XSS
- Use HTTPS in production
- Implement proper session management
- Validate file uploads thoroughly

## Testing

- Test all forms and user interactions
- Verify responsive design on multiple devices
- Check browser compatibility
- Validate HTML/CSS
- Test with different PHP versions

## License

By contributing, you agree that your contributions will be licensed under its MIT License.

## References

This document was adapted from the open-source contribution guidelines for [Facebook's Draft](https://github.com/facebook/draft-js/blob/a9316a723f9e918afde44dea68b5f9f39b7d9b00/CONTRIBUTING.md)