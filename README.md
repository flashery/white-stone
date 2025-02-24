# White Stone WordPress Theme

A modern, custom WordPress theme for real estate agencies, built with Tailwind CSS. This theme is specifically designed for new build real estate specialists, featuring a clean, professional design with emphasis on property showcasing and lead generation.

## Features

- Responsive design optimized for all devices
- Built with Tailwind CSS for modern, utility-first styling
- Custom color scheme with branded blue (#273675)
- Interactive components including:
  - Property galleries
  - Testimonial carousel
  - Contact forms
  - Interactive navigation
- Google Fonts integration (Raleway)
- Optimized for real estate content
- WordPress Customizer integration

## Prerequisites

- WordPress 5.0 or higher
- PHP 7.4 or higher
- Node.js 12.0 or higher
- npm or yarn package manager

## Installation

1. **Clone the repository to your WordPress themes directory:**
   ```bash
   cd wp-content/themes/
   git clone [repository-url] white-stone
   ```

2. **Install dependencies:**
   ```bash
   cd white-stone
   npm install
   ```

3. **Build assets:**
   ```bash
   # For development with watch mode
   npm run dev

   # For production build
   npm run build
   ```

4. **Activate the theme:**
   - Go to WordPress admin panel
   - Navigate to Appearance > Themes
   - Activate "White Stone Theme"

## Development

### File Structure
```
white-stone/
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
├── dist/
│   └── assets/
├── templates/
├── functions.php
├── index.php
├── style.css
├── tailwind.config.js
└── package.json
```

### CSS Development

The theme uses Tailwind CSS for styling. Main stylesheet is located at:
```
assets/css/style.css
```

To modify styles:
1. Edit the source files in `assets/css/`
2. Run `npm run dev` for development
3. Changes will be compiled to `dist/assets/css/style.css`

### Custom Colors

The theme uses a custom color palette defined in `tailwind.config.js`:
- Primary Blue: `ws-blue` (#273675)
- Additional colors can be added in the Tailwind configuration

### WordPress Customizer

The theme includes customizable options in the WordPress Customizer:
- Banner background image
- Banner headings and text
- CTA button text
- Contact information

## Production Deployment

1. **Build production assets:**
   ```bash
   npm run build
   ```

2. **Verify production build:**
   - Check that all assets are minified in `dist/` directory
   - Test all features in a staging environment

3. **Upload to production:**
   - Upload all theme files to your production server
   - Activate theme if not already active

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is licensed under the ISC License - see the LICENSE file for details.

## Credits

- Built by [Your Name/Company]
- Uses [Tailwind CSS](https://tailwindcss.com/)
- Uses [Swiper](https://swiperjs.com/) for carousels

## Support

For support, please email [support@email.com] or open an issue in the repository.