# Todo

- Specify MVP


## Apps

- Create 2 more apps


### Food tracker

- Create consumption diet task (max cal)

#### Products

- Disallow edit / delete for non admin users


## Goals

- Make goals measurable ( by tasks? )
- should we make goal add a wizard?
- Create a good mechanism to set smarter goals
- Add the ability to add (custom) categories to goals
- Add the ability to reschedule goals


## Tasks

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

- Refactor add task into partials (partialize the different types like done with edit)
- Correct list item with (add truncation for items that are too long) (or introduce task titles)
- Abstract recurring view tab bars
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


### Cons

- Some goals are connected we lose the first step of this connection 
- Changing a task potentially needs to be changed for every goal it occurs in
- For some task types it doesnt make sense to have multiple of them (eg protein task)


## Technicalities

- Manifest.json