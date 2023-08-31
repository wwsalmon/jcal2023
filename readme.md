# JCal WordPress template

## Development
- set up wordpress in mamp
- clone this repo into wp-content > themes folder
- activate the theme in wp-admin
- run `npm run tw` to watch for tailwind
- you may need to edit php.ini (find the proper directory by running `phpinfo()`) to set max_post_size to a higher amount
- for some reason php 8.x had errors? so use php 7.4 for now

## Plugins
- ACF: add publication_name (text), published_url (url) and publication_logo (image) fields to posts
- Coauthors Plus

## Adding users
- Go to Users > Add New
- Add first name, last name, email (email can be stand-in/non-functional)
- Uncheck "Send the new user an email about their account."
- Set role to Author
- Create user
- Click into user again and add biography
- Hit "Save Changes" at bottom

## Posting stories
- Go to Posts > Add New
- Add <90 character headline
- Add <150 character excerpt. If no excerpt field is present, go to "Screen Options" at the top > check Excerpt
- Add feature image with credit in caption
- Add body
- Assign the correct author in the author field. See "Adding users" above for how to add new authors.
- Fill out Publication name, published URL and publication logo fields with publication that the story was republished in (if applicable)