# Contact Form Setup Instructions

Your contact form has been updated to be functional. You have two options to make it work:

## Option 1: Using PHP (if you have a server with PHP support)

1. **Update the email address** in `contact-handler.php`:
   - Open `contact-handler.php`
   - Replace `your-support-email@example.com` with your actual support email address

2. **Upload files to your server**:
   - Make sure both `contact.html` and `contact-handler.php` are on the same server
   - Ensure your server has PHP and mail functionality enabled

3. **Test the form**:
   - Visit your contact page and submit a test message
   - Check your support email for the message

## Option 2: Using Formspree (Recommended for static hosting)

1. **Sign up for Formspree**:
   - Go to https://formspree.io/
   - Create a free account
   - Create a new form and get your form ID

2. **Update the form action**:
   - In `contact.html`, find the form tag
   - Replace `action="contact-handler.php"` with `action="https://formspree.io/f/YOUR_FORM_ID"`
   - Replace `YOUR_FORM_ID` with the actual form ID from Formspree

3. **Configure Formspree**:
   - In your Formspree dashboard, set your support email as the recipient
   - Configure any additional settings as needed

## Option 3: Using Netlify Forms (if hosting on Netlify)

1. **Add netlify attribute to form**:
   - Add `netlify` attribute to your form tag
   - Example: `<form netlify id="contactForm" method="POST" class="d-flex flex-column gap-3">`

2. **Deploy to Netlify**:
   - Push your code to GitHub
   - Connect your GitHub repo to Netlify
   - Deploy your site

3. **Configure notifications**:
   - In Netlify dashboard, go to Forms section
   - Set up email notifications to your support email

## Features Included

- Form validation (all fields are required)
- Email format validation
- Loading states and user feedback
- Success and error messages
- Responsive design maintained

## Troubleshooting

- **PHP Option**: Make sure your hosting provider supports PHP and mail functions
- **Formspree**: Free plan has monthly submission limits
- **Netlify**: Only works when deployed on Netlify platform

Choose the option that best fits your hosting setup!
