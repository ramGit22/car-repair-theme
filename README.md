# Car Repair Theme

A custom WordPress theme built with Underscores (_s) for a car repair center. The theme integrates **Bookly** (free plan) to allow customers to book services like tire change, oil change, and brake check online. Features a clean, automotive-themed design (blue/red colors, car imagery) and a streamlined booking form with unwanted UI elements (e.g., "I'm available on or after") removed via CSS.

## Features
- **Booking System**: Bookly-powered form for scheduling up to 5 services (e.g., Tire Change, Oil Change).
- **Custom Design**: Blue (#1E3A8A), red (#B91C1C), white (#FFFFFF) palette with Roboto/Montserrat fonts.
- **Pages**:
  - Homepage: Hero with "Book Now" button, services overview.
  - Book Now: Bookly form with tire background, simplified UI.
  - Services: Service descriptions.
  - Contact: Shop details, Google Maps embed.
- **Email Notifications**: Admin and customers receive booking confirmations.
- **Responsive**: Mobile-friendly layout for easy booking.

## Requirements
- **WordPress**: 6.0+ (self-hosted).
- **Bookly**: Free plan (v22.0+ recommended).
- **LocalWP**: Optional for local development (free, v6.0+).
- **Hosting**: For live site (e.g., Bluehost, ~$3–$5/month).
- **Domain**: Optional (e.g., joesautorepair.com, ~$10–$15/year).
- **Tools**:
  - VS Code for editing.
  - Browser (Chrome/Firefox) for testing.
  - Canva (free) for logo.
  - Unsplash for images (e.g., `tire-bg.jpg`).

## Installation
1. **Set Up WordPress**:
   - **Local**: Install LocalWP, create site ("Car Repair Test").
   - **Live**: Use Bluehost/Hostinger, install WordPress.
   - Access wp-admin (e.g., http://car-repair-test.local/wp-admin).

2. **Install Theme**:
   - Clone or copy `car-repair-theme/` to `wp-content/themes/`.
   - In wp-admin: **Appearance** → **Themes** → Activate "Car Repair Theme".

3. **Install Bookly**:
   - **Plugins** → **Add New** → Search "Bookly" → Install, activate (free).
   - Configure:
     - **Services**:
       - Category: "Car Services."
       - Add (max 5): "Tire Change" (30 mins), "Oil Change" (45 mins), "Brake Check" (20 mins), "Battery Replacement" (30 mins), "Alignment" (40 mins).
       - Staff: One, "Joe’s Auto Repair."
     - **Settings**:
       - Hours: Mon–Fri, 9 AM–5 PM.
       - Email Notifications: Enable for admin (info@joesautorepair.com), customers.
   - Create "Book Now" page:
     - **Pages** → **Add New** → "Book Now."
     - Add `[bookly-form]` (Shortcode block).
     - Set **Page Attributes** → Template: "Book Now."

4. **Set Up Pages**:
   - **Homepage**: **Pages** → **Add New** → "Home," set as homepage (**Settings** → **Reading**).
   - **Services**, **Contact**: Add pages, customize content (e.g., Contact: address, map embed).
   - **Menu**: **Appearance** → **Menus** → Create "Primary Menu" (Home, Book Now, Services, Contact).

5. **Assets**:
   - Add to `car-repair-theme/images/`:
     - `logo.png`: Create in Canva.
     - `hero-bg.jpg`, `tire-bg.jpg`: From Unsplash (compress at TinyPNG.com).

6. **Test**:
   - Visit `/book-now`, book a test appointment.
   - Check email notifications.
   - Test mobile view.

