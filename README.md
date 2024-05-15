# JDA - Alkademi Laravel Training

### Name = Hudiya Resa ###
### Group = 06 - 018
### Title = Smart Automotive: Accurate Motorcycle Service Reminder ###
### Project Description = From Mileage to Maintenance, Seamlessly Connected. This innovative website bridges the gap between your motorcycle and its service schedule. Using Intuitive Data Structures, it creates a Reminder System, keeping your bike running smoothly and extending its lifespan. ###


# Changelog

## Version 1.0.0 - May 15, 2024

### New Features

1. **Page Additions:**
   - **Landing Page (/**): (Under construction) The default entry point of the website, providing an overview and navigation to other sections.
   - **Home (/home):** A dedicated homepage displaying the main content and features after user login.
   - **Vehicle (/vehicle):** A section focused on detail vehicle from user.
   - **Service (/service):** Provides information about various services needed.
   - **Contact (/contact):** Contains contact details from developer.
   - **Notifications (/notifications):** (Not yet implemented) Placeholder for future notification features.

2. **Layout Enhancements:**
   - **layout.php Updates:**
     - **x-navbar & x-navlink:** Introduced reusable components for the navigation bar and navigation links.
     - **x-header:** Added a new component for consistent header usage across pages.

3. **Component Slots:**
   - **x-slot for Title Page:**
     - Each route now has a corresponding `x-slot` to define the page title dynamically.
     - The `x-slot title` integrates seamlessly with `x-layout` to set and display the title on each page.

4. **Attribute Improvements:**
   - **$attributes Navlink:**
     - Enhanced the `navlink` component to accept `$attributes`, providing greater flexibility and customization options for the navbar.

5. **Component Properties:**
   - **$props(['active' => false]):**
     - Introduced a default `active` property to the navigation link component, enabling dynamic styling based on the active state of the link.

The UI is built using **Tailwind UI** for consistent and responsive design. This update introduces fundamental pages and enhances the layout structure, setting a solid foundation for further development and feature additions. Each component is designed to be reusable and maintainable, ensuring a clean and efficient codebase