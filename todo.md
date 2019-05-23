# Todo

- Specify MVP


## Apps

- Create 2 more apps


#### Products

- Disallow edit / delete for non admin users


## Goals

- Make goals measurable ( by tasks? )
- should we make goal add a wizard?
- Create a good mechanism to set smarter goals
- Add the ability to add (custom) categories to goals
- Add the ability to reschedule goals


## Tasks

- Remove completed state from task agreements
- Fix product count +1 redirect
- Add task explanations


## Misc

- Set theme based on day inside the login / registration / onboarding views


## Calendar

- Create a goals / tasks calendar


## Food tracker

- Schematics & graphs


## Onboarding

- Show reasons/benefits why they (should) download your app
- Pre filled data?
- Get the user asap to success milestone (fulfillment of a goal? What about demo fulfillment run)
- Spike feelings of accomplishment (After eg adding a goal,  In a non childish way!)
- Push notification (On onboard failure?)


## Responsive design

- Correct desktop design
- Create tablet design


## Users & authentication

- Add ability for admin to delete users
- Add ability to login with google
- Add ability to reset password
- Redesign login/register screen


## refactor

- Correct list item with (add truncation for items that are too long) (or introduce task titles)
- Create a dedicated post install mechanism
- Use of app::make inside views?


## UX

### Tips

- Let your users know that they’re doing great by acknowledging their progress, and celebrating the success with the user.


### App (Re evaluate later)

Should a task only belong to one goal ever?

### Pros

- The application will be simpler (a goal has tasks and that's it)
- Changing a task doesn't mess up other goals
- The end date of a daily tasks will be a bit more clear
- It's easy to enforce the rule that a task must belong to a goal
- Removing a goal easily removes all connected tasks


### Cons

- How are you going to make the task list (if you crop duplicates how will you show each one for each goal?)
- Some goals are connected we lose the first step of this connection 
- Changing a task potentially needs to be changed for every goal it occurs in 
    (Should be solved in the view to make it explicit ( Found same task in the following goals would you like to update them there too?))
- For some task types it doesnt make sense to have multiple of them (eg protein task)


## Technicalities

- Manifest.json