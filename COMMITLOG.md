
# Delta Team - Studio Management Commit Log :calendar:23 September 2021


## Commits :heavy_check_mark:
### [`#d7e0b98`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/d7e0b98d4b3adb887b8ad6d63b119299cd1b4a73) leggtc1@student.op.ac.nz 
changelog added to package.json, root directory 

### [`#6ef2574`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6ef25740c0758c2f37dcfdf4fbe70c91747fae0d) leggtc1@student.op.ac.nz 
chore(package.json and readme.md): commitizen config added to package.json + badge added to readme

change also made in the .git hidden file pre-commit config file which enables commitizen to function 

### [`#b68c87d`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b68c87d2931a656970814ea4782579cb07ba2003) leggtc1@student.op.ac.nz 
updated student form, controller to handle errors #138

form shows errors in a list using red text. form is repopulated with data from the original request 

### [`#8e0e5d9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8e0e5d99abf506b06a2a2f4bd97cb15a4724ac8e) leggtc1@student.op.ac.nz 
updated student/note controller, note form #84

note form now has access to the student id, and can create a new note for the student. controller redirects user to the student they are adding a new note for. student profile page updated to display note data 

### [`#f2bfba9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/f2bfba948f46f96f95304ad917d6e17f47938116) leggtc1@student.op.ac.nz 
CI: removed issue template forms left from sprint 3 

### [`#40bd81a`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/40bd81a2412b64a32f0ae9323e422d0ab24eb5f3) leggtc1@student.op.ac.nz 
updated evidence migration,with description field #85

evidence form submission now returns user to the student the file is uploaded for 

### [`#6dfa716`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6dfa716a8fe6bf0f6dcf6ef5786672fc64ba7656) leggtc1@student.op.ac.nz 
updated student page, form, profile, controller #138

removed the student email input, utilised the student user name and appended atstudent.op.ac.nz to the end. updated to profile page layout, made links clickable. added blade checks on empty arrays, output information if no content is available to show 

### [`#ee93e1e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/ee93e1e1539493197963b65e56a22bea3409d9a7) leggtc1@student.op.ac.nz 
updated changelog + template - added icons to headings 

### [`#933d04d`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/933d04db13387a0923ae09b949dc2750c0e87dbb) leggtc1@student.op.ac.nz 
updated evidence controller, student profile evidence delete button #85 #127 #181 #160

student evidence delete button now works, returns user to student profile page 

### [`#8c338ff`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8c338ffdb260f0fafb3881a166048ea552cd6cfd) leggtc1@student.op.ac.nz 
updated changelog config + template 

### [`#222c0f6`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/222c0f68b2d9f7e66f93ad47149679cf280949e8) leggtc1@student.op.ac.nz 
created student edit form component 

### [`#7585f52`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7585f527bc4830a5957df3e4711c9e639ea43343) leggtc1@student.op.ac.nz 
CI: security action added

action runs 3 tests consecutively; composer NPM and PHPUnit Tests. PHP unit test has been included to check that the deployment will work

(cherry picked from commit 265fdbbc20efff015270852f7bc3e9f45421a282) 

### [`#13fd9af`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/13fd9afcd42b2275ba67e21c255c8aeca307d4a2) scotms2@student.op.ac.nz 
fixed evidence upload as it wasnt working 

### [`#f1db190`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/f1db190f123cd3e9464e03c4a63f9c72ae2e8615) leggtc1@student.op.ac.nz 
Removed pending status action

(cherry picked from commit 8d0e6507195d58c18ea5080c7061f267cbd71c3d) 

### [`#9eb9145`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/9eb9145d4de851d816b3d252012fe6494bf5aa21) leggtc1@student.op.ac.nz 
addition of pull request reminder action

send a teams notification/reminder if a pr has been left unreviewed for more than a day

(cherry picked from commit 53ec9626e2771b99491bb53f7c3bacc3f0ee09ed) 

### [`#a35c698`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a35c6982b0043c5c8d76c85af437393bb2800616) leggtc1@student.op.ac.nz 
updated note controller with delete method called from student profile #138 #84 #160 

### [`#79b87be`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/79b87be7c9f6baa4400156a30314f92723d25813) leggtc1@student.op.ac.nz 
updated student controller validation rules #138

added back in student creation method, after it is validated 

### [`#4f41eda`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/4f41eda959ad6d3ec861f109e76f776d39219123) leggtc1@student.op.ac.nz 
CI: added PHP security scanner to action

(cherry picked from commit 28448c5331dd7467ec8dac6a1f39a537c1878b3b) 

### [`#172d6ec`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/172d6ecad12ab53e5515ae4944d56440fa68cdaa) leggtc1@student.op.ac.nz 
updatediption input field to form #85 

### [`#0153318`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0153318586211c1feba7367b2d47f8ac6562c40b) leggtc1@student.op.ac.nz 
CI: Updated action triggers

these will now run predominately on pull requests

(cherry picked from commit d473ea7d2344c81d073a42d01d745bfa1d626a2c) 

### [`#fb08a26`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/fb08a26d573481d14fbb0af7a7c3284ca1595982) leggtc1@student.op.ac.nz 
CI: made security test run for pull requests

not push and pull requests

(cherry picked from commit 96c559739f92958e4c093fcb71d798261c76791b) 

### [`#baf05e3`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/baf05e384988ad9dc6a4341ba16809cd1061cd4c) leggtc1@student.op.ac.nz 
chore(package.json script change): reverted the .git config change added previously

the previous change in git config caused issues in the command line, so this has been dropped and
the node installation, config option used instead 

### [`#ff9ca43`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/ff9ca4321c9ef639d46426a41f055f49b69d87f4) leggtc1@student.op.ac.nz 
Merge pull request #184 sprint-4-student-update-form

Sprint 4 student update 

### [`#b8ea489`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b8ea489f1a3b3140c886b2d21cf2bb95f19a4a0a) leggtc1@student.op.ac.nz 
Update database/migrations/2021_09_19_041212_update_field_names_in_evidence_table.php 

### [`#973e849`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/973e849eb11e7edddf2b784e42c9cce174939f69) leggtc1@student.op.ac.nz 
Merge pull request #178 evidence-upload-fix - Sprint 4

fixed evidence upload as it wasnt working 

### [`#034b8c1`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/034b8c1e40c2f9a4fa3e67f23921bdb49fb19e5c) 53206496+scotms2@users.noreply.github.com 
Update app/Http/Controllers/EvidenceController.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#1334846`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/13348461df6537aaef6baa6056969fceb0ecbac1) scotms2@student.op.ac.nz 
added a option tag so it doesnt start on a student 



# Delta Team - Studio Management Commit Log :calendar:13 September 2021

Sprint 3 deployment fix

## Commits :heavy_check_mark:
### [`#67ab830`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/67ab8308d04f1a6a6587f41aaa5f9a8876d36f21) leggtc1@student.op.ac.nz 
Merge pull request #168 /sprint-3-deployment-fix

Sprint 3 deployment fix 

### [`#aa76452`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/aa764525e688badbd39116fcd55503f26729ec5e) mrmattrevell@gmail.com 
Attempt dependancy clean up with files from staging 

### [`#9d0cdea`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/9d0cdeae491a260074d465cc4f8e6987b569f2ec) leggtc1@student.op.ac.nz 
Updated student form, added drop down to seperate component

added input field components, to bring in line with other sections 

### [`#8fa0ce7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8fa0ce727cc43f746bc36095997f797dbe3dad30) leggtc1@student.op.ac.nz 
updated composer, moved dev dependencies to developement

to be available for github actions 

### [`#bf94357`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/bf943575db4cad134aa5601d790850502825270a) scotms2@student.op.ac.nz 
Added the ability to create roles and permissions. You cannot edit them or delete them 

### [`#541cf48`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/541cf488d6249e2f76c0de3400a5f9a433513584) leggtc1@student.op.ac.nz 
updated student/cohort select, now pulling data from cohort

updated student page to utilise more view port space available also 

### [`#5df067c`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/5df067ce6c67193de33f833f06cc0b23db8d5123) leggtc1@student.op.ac.nz 
correction added to the composer lock, json files 

### [`#7300a19`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7300a196e822696c24077a3c78426772c875d172) mrmattrevell@gmail.com 
Replaced dusk.local env file 

### [`#b4abdcb`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b4abdcb9326df3b990be280f8603b6cf4e546e79) mrmattrevell@gmail.com 
Commented out some problematic tests to were failing due to bugs on the site 

### [`#09cc3c0`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/09cc3c0e6bc2933ebc8eacad17b13a42cd76cc7a) leggtc1@student.op.ac.nz 
update to route, nav files to include dashboard deactivation

updated form layout to fix width issue 

### [`#9e91c90`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/9e91c90fddbf14437303ea3de48fab5b408fe069) leggtc1@student.op.ac.nz 
removed migration causing error, new version available on staging branch 

### [`#c82e30f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c82e30f0a19275efc8d6b101d6f73c337ec59954) scotms2@student.op.ac.nz 
Removed role check 

### [`#635a0f6`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/635a0f639722b2e5bcd24bd6a69a802a8d37a75e) leggtc1@student.op.ac.nz 
configuration changes added which enable deployments to install automatically

on heroku. Node changes allows css to be compiled on the server rather than merged to, procfile, heroku.sh will automatically run seeders and migrations - seeders command could be changed so that it only runs specific seeders for the deployment 

### [`#0b19ccc`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0b19ccc497caef286adbec2879289f3896369c02) scotms2@student.op.ac.nz 
changed seeder to create user in perms file and assign user to super-admin role 

### [`#0ccdfad`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0ccdfadcd15ce96b93f53acee5eaa09c30d3fbc4) leggtc1@student.op.ac.nz 
update web route and route service provider 

### [`#43d641f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/43d641f2064346537c82577384ac9a463e937f74) scotms2@student.op.ac.nz 
Changed models to check for proper foreign keys 

### [`#8738b7d`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8738b7d471301cac6ff6861c15c3a919d1e82b38) leggtc1@student.op.ac.nz 
correction added to node package file

heroku is using an older version of node as its default, needs to have the version we are using provided to it 

### [`#00e9cd3`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/00e9cd37da581fa76da48eb5ee0878584d802b56) scotms2@student.op.ac.nz 
added back some styles that were removed 

### [`#57bc21c`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/57bc21c36124b2856e32ad911d42cd9f3e8d4060) leggtc1@student.op.ac.nz 
removed automatic seeder

creating errors during deployment 

### [`#6eb7d94`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6eb7d9467737cd8621b4b4bb8868be45f79a10d4) leggtc1@student.op.ac.nz 
updated dusk test suite 

removed duplicate seeder function 

### [`#8414f59`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8414f59b839ed14a515778d6cb62f32521bfa6c1) leggtc1@student.op.ac.nz 
updated deploy script with seeder function call

these need to be removed if they have data that is already seeded to the database, or they will error out. only include seeders that have not yet been deployed to the servers 

### [`#27ecad1`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/27ecad1f9da21472a9146834d98468a8cbf0e45d) leggtc1@student.op.ac.nz 
updated node packages

removed script from line 19 that was causing errors 

### [`#825e2e0`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/825e2e04cb318fc1807880260087943128d971d2) leggtc1@student.op.ac.nz 
fix added to cohort_id assignment when creating student 

### [`#858c73b`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/858c73ba6069bf97a1430fa8d229330bdbda42a2) leggtc1@student.op.ac.nz 
removed duplicate  `use` controller line 

### [`#00bdcf4`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/00bdcf471a88ac0c42485d35edc8f7015a51e360) leggtc1@student.op.ac.nz 
Merge pull request #167/sprint-3-deployment-fix

Fixed  problem with accessing users route 

### [`#82796a5`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/82796a530bbd86c3bc0ff8ff4f70cfc13110f97e) scotms2@student.op.ac.nz 
changed table check in models to be user_papers 

### [`#06ae301`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/06ae3013fe7b782d2d3ebe605d43c817ea2b58a2) leggtc1@student.op.ac.nz 
updated student list 

### [`#141d45e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/141d45eb4b329ec6f2f34969ac4e6dd3202b4bfa) scotms2@student.op.ac.nz 
changed the cohort and paper column to show correct info 

### [`#b4fbb34`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b4fbb34dc6b072f3c4969e0e4a8f4f948c6806bc) leggtc1@student.op.ac.nz 
merge commit conflict fixes 

### [`#5c9ee09`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/5c9ee09882fdb16a801ee0c07ec0ec0c67a98a92) scotms2@student.op.ac.nz 
changed user creation in seeder 

### [`#a866d87`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a866d876179a8d99e6804a516519854dbcc003d5) leggtc1@student.op.ac.nz 
updated student list 

### [`#2fd3076`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/2fd30765f9c72ad6ae312758dfcc7c03cbe49759) leggtc1@student.op.ac.nz 
updated student list table properties, ones used unavailable and causing errors 

### [`#a36de03`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a36de032f1c137c3787f587c78c687d627870343) scotms2@student.op.ac.nz 
added missed semicolon 

### [`#7423c37`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7423c37e6320a13a774df72fc8389aea42f2bb25) leggtc1@student.op.ac.nz 
added the paper controller into web route file 

### [`#15728c2`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/15728c2761c3a4b2011d2f41eeee48e292af0d4b) leggtc1@student.op.ac.nz 
removed duplicate route on line 36 

### [`#0d0408c`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0d0408c9ca1e29e676ae966a91dfc4cd340f5793) leggtc1@student.op.ac.nz 
added home route 

### [`#94bdb04`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/94bdb0477491df779ebab7985a2eebab259092e8) scotms2@student.op.ac.nz 
pushing changes to files to fix conflicts 

### [`#b84b806`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b84b806e9b92ae60727a7c0668b6b8d18913348c) leggtc1@student.op.ac.nz 
updated node package npm version

this was causing errors 

### [`#a9d29b9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a9d29b9e374c4bee8a8abd98707737324a95e12e) leggtc1@student.op.ac.nz 
updated node package npm version

this was causing errors 

### [`#fad33e2`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/fad33e2420a2fc2d4f3d4a57158cc4bc06773ea4) mrmattrevell@gmail.com 
Changes to each test function to include user creation, some issues with test fails due to routing errors 

### [`#36f3ca0`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/36f3ca03291eb888f04cad93d35c90f545d4c7e8) leggtc1@student.op.ac.nz 
updated node package npm version

this was causing errors 

### [`#82d96b7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/82d96b7a9999d2c03761f44870524b133bc28ab5) leggtc1@student.op.ac.nz 
updated packages for node and composer 

### [`#aa3edff`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/aa3edff249ad71d563a76823cfcc4e12638a22e5) leggtc1@student.op.ac.nz 
Fixes added to the web route file which was causing errors

Tested all routes and only one failed - see notes in #148 @scotms2 

### [`#ce680e4`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/ce680e46e58bd531f797cea94560b1ce150aa9d2) scotms2@student.op.ac.nz 
started working on permissions and roles, created seeder to add these 

### [`#1718283`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/171828308a9a8e59c0d5e771f6482c04e1640d4e) mrmattrevell@gmail.com 
Re-adding missing file for testupload, Changing tests for new routes, Change to button press selector 

### [`#cd067ed`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/cd067ed0c26a6a616402427e8d037c1297dfab71) mrmattrevell@gmail.com 
Tweaked student names in dropdown for evidence view, Commented test files, Added dusk attach( ) test for file uploads 

### [`#4242660`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/42426608404a62823afe179c56fa8f8ea55af10d) leggtc1@student.op.ac.nz 
fix package-lock version 

### [`#820abd7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/820abd7655b98ee2849eeddebe37188adef18373) mrmattrevell@gmail.com 
Added user creation to each test method, Added refreshDatabase trait to tests, Error with user_papers table migration 

### [`#28d6174`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/28d617483b5be1a2c0c53793b5e3e6d3b1424a7c) scotms2@student.op.ac.nz 
changed the style of the table in users and changed some styles of buttons, added perm check in student form 

### [`#3a481e7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/3a481e7bd68962c62bb8a5a0af580fe437ef1b74) mrmattrevell@gmail.com 
Added id and dusk tags to inputs on evidence blade, Added createstudent method in evident test, Added simple create evidence test 

### [`#d0858fd`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/d0858fd4074c4245d03a303c69c490c2a7c9bc01) mrmattrevell@gmail.com 
Removed createadminuser function from test files as it is apparently causing automated tests to fail 

### [`#1d58f13`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/1d58f13bc2a3ef08bbe6b7e4a592578c9776f465) scotms2@student.op.ac.nz 
completed roles and perms seeder and added a role check to the admin panel, changed a few things with user creation to compensate for the adding rfof roles 

### [`#7f966f2`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7f966f21feb2c5e643c28a8d7b4d1742b90e6c0e) scotms2@student.op.ac.nz 
added permission checks to students, notes, cohorts and evidence, and updated table css wherever it was 

### [`#0138567`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/013856756f95a534e2ecaa7e292e327cd16ab333) mrmattrevell@gmail.com 
Removed some use statements and commented out lines 

### [`#1483e26`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/1483e260f5e73d65f60ae7fd3c55c2e9243fb0b9) scotms2@student.op.ac.nz 
added cohorts select for student and updated a few models, select removing a html tag below it for some reason 

### [`#a7a944d`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a7a944d6efe1c7d2e08cc3e0b2d766032d9c780c) mrmattrevell@gmail.com 
Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#17fc258`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/17fc25834a201c07ebde2efda7dc04c5b50c4307) mrmattrevell@gmail.com 
Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#0b1aed3`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0b1aed3f0ee88eba752fbe7b8c1ec5b672e72961) mrmattrevell@gmail.com 
Update tests/Browser/StudentsTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#0aaf414`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0aaf414c3eda7d38882b970ee355d88b3863b2d4) mrmattrevell@gmail.com 
Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#7254f51`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7254f512c8104b327e6e5605983455f1c0ac6c73) mrmattrevell@gmail.com 
Update tests/Browser/StudentsTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#6b7e60f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6b7e60f8f5a9c2a90d0e6361997cad8ec24bcf38) mrmattrevell@gmail.com 
Update tests/Browser/CohortViewTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#9eab1b7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/9eab1b7ed89fac15dd65d45743ba7d8c79d52f9d) mrmattrevell@gmail.com 
Update tests/Browser/LoginTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#3281d7e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/3281d7eaea7b733eb984e0cced8da846b7a2d5ea) mrmattrevell@gmail.com 
Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#28eb11f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/28eb11fb7e1cc3dfdf6ec9ff86c90777f2a33d96) mrmattrevell@gmail.com 
Update tests/Browser/CohortViewTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#e221e25`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/e221e25e72485e2764925ddec7d7e68fb1f87936) mrmattrevell@gmail.com 
Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#a87ae45`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a87ae45321e49d29f902f2c53b5b9ff352eca5af) mrmattrevell@gmail.com 
Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#c29f73a`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c29f73a4b9c0dfa48539f75d41b483916b196121) mrmattrevell@gmail.com 
Update composer.json

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#2c463a8`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/2c463a826874469d781b76aee6c26c9bb5a69c7c) mrmattrevell@gmail.com 
Update tests/Browser/StudentViewTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#4d3fe11`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/4d3fe11834695936d3cd0c5bc5c2f596bc6cea1a) mrmattrevell@gmail.com 
Update tests/Browser/StudentsTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#0787dcf`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0787dcf6dbe2f113bbf2baf8b36dbd0cb342f282) leggtc1@student.op.ac.nz 
Update branch with changes from staging 

### [`#2b0843a`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/2b0843a169edbc00762d3388cb5cd006b608a87c) leggtc1@student.op.ac.nz 
Merge sprint-3-github-dusk-action #144

Sprint 3 GitHub Dusk Testing + Local Dusk Tests 

### [`#bcb6a9e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/bcb6a9e271082dca5cc768e0ca9332949e2d38be) leggtc1@student.op.ac.nz 
fixed merge conflict 

### [`#c483d24`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c483d24dd72bef1dc461f5ee259d91f4206d8354) leggtc1@student.op.ac.nz 
Updated composer lock and json, moved dev dependencies to production

so these are compiled to use in github actions. Dev dependencies are not used by github 

### [`#2814a50`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/2814a50c3638fbacb3357181297f14691de72846) leggtc1@student.op.ac.nz 
updated github dusk test action

added some new test packages to composer 

### [`#783e2b2`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/783e2b2a5c54c2e954241b8f73e0711c2f28a0b2) mrmattrevell@gmail.com 
Tweaked student names in dropdown for evidence view, Commented test files, Added dusk attach( ) test for file uploads 

### [`#7c92d17`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7c92d171ef67adf04348fe7b3c54a57adb54f6df) mrmattrevell@gmail.com 
Added user creation to each test method, Added refreshDatabase trait to tests, Error with user_papers table migration 

### [`#3af2ed8`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/3af2ed876412c40f6710878235d29d86da2b6589) leggtc1@student.op.ac.nz 
updated dusk tests that were returning errors #131 

### [`#b2984e9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b2984e9842ed2b50dacd8cbe66d375c8b26ea8fb) mrmattrevell@gmail.com 
Fixed tests to work with new site links, buttons. Removed some non-applicable tests 

### [`#523a979`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/523a979b37b8fc8e32f4c5d3d2f19b9b8fece8be) mrmattrevell@gmail.com 
Added branch for students, evidence tests. Made test files. Added first basic test methods 

### [`#0df7a29`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0df7a29b1ca7164c76018be7cdf13f843896e8a9) leggtc1@student.op.ac.nz 
added Note controller, transferred methods #5

updated routes on notes pages and forms #19 

### [`#aed8bba`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/aed8bba1a7f0ba5b653034ee498ab254a81be969) leggtc1@student.op.ac.nz 
removed copied action 

### [`#2f6da6e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/2f6da6eff14915be66eda40c3a2ce6d1e5050942) leggtc1@student.op.ac.nz 
Updated evidence controller with methods transferred #5

from the api and pages controllers 

### [`#1430edb`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/1430edbe12fc02ddc320bfe7a8d03c046a5b0b0b) leggtc1@student.op.ac.nz 
updated navigation tests so these work on github 

### [`#ebafdf7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/ebafdf77660d1a5f64460acc828f9adb7b799366) leggtc1@student.op.ac.nz 
updated dusk tests so that these log in correctly #131 

### [`#fb516d8`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/fb516d84a10bd40074dd4f6bba6eb9d03ea26fb1) leggtc1@student.op.ac.nz 
last corrections to tests for dusk github action #131 

### [`#e796315`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/e796315ce0aea7d44733d3ed6b772d86be18778f) leggtc1@student.op.ac.nz 
debugging the nav logout button

because this needs csrf protection it is in a form, so the normal nav link needed to be copied to a new button component that uses the same styling as the other links on the navbar. 

### [`#43221d8`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/43221d8655723233e08bff4d18c6180d779030d7) leggtc1@student.op.ac.nz 
completed the navbar fix

new component allows the dusk test suite to recognise the logout button. It was not previously able to due to this link being part of a form action rather than a standard `&lt;a&gt;` tag #131 

### [`#34eb7c2`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/34eb7c2359c18c116e922868874410c3939403ef) leggtc1@student.op.ac.nz 
updated student test 

### [`#fe3d22d`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/fe3d22dc76726bcd7e65305d8f8325025fcdc36d) mrmattrevell@gmail.com 
Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#b825f83`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b825f83f4e3c6cba294242b63539f1185fa05c76) leggtc1@student.op.ac.nz 
updated navbar test, required a change in the nav template 

### [`#c6cad91`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c6cad91bbf7acd513e0749cf4f960c4494ec76b0) leggtc1@student.op.ac.nz 
debugging php artisan dusk command #131 

### [`#6abfeaa`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6abfeaaf9d56c42ac3887fae732004e6a0c9a751) leggtc1@student.op.ac.nz 
updated auto assign action and readme

also altered the dusk env file for testing 

### [`#78c8f36`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/78c8f36feb7e7886e6ff02339902b7a5731be461) leggtc1@student.op.ac.nz 
correction made to dusk env app name, causing errors

removed php unit test from the dusk action 

### [`#2336f5b`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/2336f5b3285108b4adc92f5129b744895f581d33) mrmattrevell@gmail.com 
Migration name change, working on tests 

### [`#3a1cdca`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/3a1cdcaf8bb0493866a66a5bf7232e14e3cc0b06) leggtc1@student.op.ac.nz 
updated database config, env files for dusk testing #131 

### [`#40c91f2`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/40c91f240605412b044ec8ac64e96fbb8ed93368) mrmattrevell@gmail.com 
Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#c94f673`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c94f673fbca55de6ab893c0e45b21e50ee8e5f0e) leggtc1@student.op.ac.nz 
updated action, remove composer flags causing errors 

### [`#389ee6a`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/389ee6a00f81a7ea07ddd6200c9048e519e174e1) leggtc1@student.op.ac.nz 
new action to clear old workflow runs from the repo 

### [`#01b4651`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/01b46517ff7f021e59682b76fc7a045b7b9a2bbd) leggtc1@student.op.ac.nz 
removed database migration line from cohort test #131 

### [`#c5b4d08`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c5b4d0891aa1c5a097ee2c40f2a6a997eacd4856) mrmattrevell@gmail.com 
Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#90b626f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/90b626f935138f145e9ddcf1742d59473456ae8b) mrmattrevell@gmail.com 
Update tests/Browser/StudentsTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#df257f1`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/df257f1792d91c50383e4ffdc9eef9c14b80587b) leggtc1@student.op.ac.nz 
Added last minute change to migration file name

This failed to migrate due to the naming of the file. Was `CreateUserPaperTable` which caused the app to try to create a table Users which already existed 

### [`#d4ac468`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/d4ac46849d370568da7de8022ce3bf7b0f19b8e2) mrmattrevell@gmail.com 
Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#7a23be2`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7a23be28d4de0309272ed1f2ec5c56105164379c) mrmattrevell@gmail.com 
Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#3641198`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/3641198f2c6c78e3e8fb7ddc31dabb6b7e89907a) mrmattrevell@gmail.com 
Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#c2b7b41`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c2b7b41f49f727ad0dda9bb180f62153d5294e47) mrmattrevell@gmail.com 
Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#6d71884`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6d7188455d40e9c22e4732d01484acb3c4c25dfb) leggtc1@student.op.ac.nz 
Merge #141 sprint-3-update-homepage

Sprint 3 Dashboard Update 

### [`#96e2aa3`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/96e2aa390fcb6c38132cac5cf9dd902a3b1e6ef0) leggtc1@student.op.ac.nz 
added php artisan dusk command back into action #131 

### [`#7cac8e9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7cac8e91f826b7f59d3e3b1d568aa0ace0f30e6c) leggtc1@student.op.ac.nz 
Merge pull request #134

Sprint 3 assign multiple papers 

### [`#8f0707f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8f0707f48a94f337df0431702c05fbb32721589c) leggtc1@student.op.ac.nz 
Update to dusk action #131

discovered through testing a copy of the project that the database configuration was not correct. Have added some changes to the configuration files 

### [`#6806509`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6806509f31affcab0117e76f565ddb1d77386685) leggtc1@student.op.ac.nz 
Revert "Resolved Merge Conflicts"

This reverts commit 93722a849cd7ef3eede09a5e5821368f4dda62a3, reversing
changes made to b374d979159df3a13ad22f267e9c3c7a78f5ee60. 

### [`#410b899`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/410b899eb6f27704873b9c50d12446194bedb4ad) leggtc1@student.op.ac.nz 
updated dusk actions, correcting errors in config

#131 #130 

### [`#29a83d5`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/29a83d53387a2bcb16a653525d9e6229cf46655f) leggtc1@student.op.ac.nz 
Routes updated to use resource controllers #19

removed pages and api controllers, containing commented out and/or duplicate functions 

### [`#2d68a52`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/2d68a52e801e9c3b20f8ab3ce7f9f4ef0cbc704c) scotms2@student.op.ac.nz 
added crud for papers, currently have a problem with edit and delete as it sends an empty object 

### [`#0fef47a`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0fef47a8c66dce99e60e29d265f33646160ac0e4) leggtc1@student.op.ac.nz 
Correct to dusk github action and css added 

### [`#8cb5e1c`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8cb5e1c8dfe20ab93fda5c9dbf1c8e7243851110) mrmattrevell@gmail.com 
Fixed tests to work with new site links, buttons. Removed some non-applicable tests 

### [`#0da3412`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0da3412e014e37829276cb83abd80e37293eb61e) leggtc1@student.op.ac.nz 
added function to the cohort view test

changes allow the test to run in github action 

### [`#873daed`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/873daed7b270bca01637d65c814aefa649a030c7) mrmattrevell@gmail.com 
Added branch for students, evidence tests. Made test files. Added first basic test methods 

### [`#4f63a2e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/4f63a2eea1eb263cddf0d198cd3065b5719319f7) scotms2@student.op.ac.nz 
added a pivot table for papers and users so I can store multiple papers for a user 

### [`#87afe37`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/87afe37ccb8fe42124509f0a27fb282da46472c1) mrmattrevell@gmail.com 
Added id and dusk tags to inputs on evidence blade, Added createstudent method in evident test, Added simple create evidence test 

### [`#451b704`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/451b704392c7ed9d7dc848b3bbabbaa658f73cac) leggtc1@student.op.ac.nz 
Updated Dashboard as per #137 ticket

Default laravel content removed, navbar links changed to use the student page as the home route 

### [`#469ec31`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/469ec316e7eb9def3be5c9e3d3a87e5a0b93a20c) mrmattrevell@gmail.com 
Update README.md 

### [`#559a6af`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/559a6afa650527e1b6e2ec3a9880b64e7acbe084) scotms2@student.op.ac.nz 
Now have fully working crud for papers 

### [`#cbc1e5b`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/cbc1e5b37e5adb725f96c958e40fa65580d687b1) scotms2@student.op.ac.nz 
added admin panel to nav bar and it'll only appear for admin users, removed ability to update admin status to self if logged in 

### [`#5b43c07`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/5b43c0740288ea2548cd58fbe0fba815270c5849) scotms2@student.op.ac.nz 
changed to multi select list box for selecting papers 

### [`#8eacdd9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8eacdd9a75264253fff811d48f81f1d1c40e42e1) leggtc1@student.op.ac.nz 
removed unused routes from the api route #19 

### [`#f9acef7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/f9acef7b69d2da927514c323602ef854d56f691a) leggtc1@student.op.ac.nz 
updated github dusk action #131

added new commands to get the correct version of chromedriver and change its permissions 

### [`#fbb92b3`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/fbb92b346c39b8632b0b7ca530226bca49577e8a) 53206496+scotms2@users.noreply.github.com 
Commented out blade stuff 

### [`#c5edc67`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c5edc676dd6c45cfe9b158020dec737f271db35a) 53206496+scotms2@users.noreply.github.com 
Update index.blade.php 

### [`#4d8bef0`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/4d8bef03f1f90dbc14d1649a0c9df099c644b822) 53206496+scotms2@users.noreply.github.com 
Update PaperController.php 

### [`#725c44e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/725c44e86d1952d737ff627f554a92a18615bdfe) scotms2@student.op.ac.nz 
Admin can assign multiple papers to a lecturer now through the edit button. These can be changed through the same way. Deleteing a user also removes there data from the pivot table 

### [`#39612e1`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/39612e11841e43a89eddb6443805cea3ed811aab) leggtc1@student.op.ac.nz 
Update resources/views/components/student-form.blade.php 

### [`#981f04e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/981f04e96752f27204ef69174a770b9c31779f1d) leggtc1@student.op.ac.nz 
correction to database seeder file-conflict merge error 

### [`#bd60b85`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/bd60b85b5cfcc20d2d35ad17183b3d6336416488) mrmattrevell@gmail.com 
Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#32c1ecd`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/32c1ecd183edb987e8dc3abbe1ba9f463b1031dd) mrmattrevell@gmail.com 
Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#a9f3295`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a9f329555e878354ee0b416f7c01308bd8a8cde3) 53206496+scotms2@users.noreply.github.com 
Update routes/web.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#df3a3ba`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/df3a3ba53e0a2ce569b2b1396d63e047ff27b1a3) 53206496+scotms2@users.noreply.github.com 
Update resources/views/papers/index.blade.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#0dc5edf`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0dc5edfd1229660e73ff05308ab2877fb9f9a972) 53206496+scotms2@users.noreply.github.com 
Update database/migrations/2021_08_28_024531_create_users_papers_table.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#eaffe63`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/eaffe6383ff293b8e0d6d997c65194268d45269a) 53206496+scotms2@users.noreply.github.com 
Update database/migrations/2021_08_28_024531_create_users_papers_table.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#dfde4de`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/dfde4deb22ed9ec6926259723fee04bcb379627d) 53206496+scotms2@users.noreply.github.com 
Update database/migrations/2021_08_28_024531_create_users_papers_table.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 

### [`#f5a597c`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/f5a597cd0b25e2ef3c06871bd7dca0a9ab320c6b) scotms2@student.op.ac.nz 
added a couple of code comments 

### [`#6c397ac`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6c397acd7bc66d6a3cf261e99835c04000a3226c) leggtc1@student.op.ac.nz 
Update resources/views/components/student-form.blade.php 

### [`#93722a8`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/93722a849cd7ef3eede09a5e5821368f4dda62a3) leggtc1@student.op.ac.nz 
Resolved Merge Conflicts 

### [`#dbae7c0`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/dbae7c093746acd00203925ca1ce7196b5c79a66) leggtc1@student.op.ac.nz 
Resolved merge conflicts in readme and composer.lock 

### [`#a804d56`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a804d56953e36027b5370ebdb610a2d30e7f82d5) mrmattrevell@gmail.com 
Update README.md 


## Merged :heavy_check_mark:
### [`#161`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/161) Sprint 3 Deployment Fix

### [`#159`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/159) Sprint 3 permissions

### [`#145`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/145) Sprint 3 qa students evidence

### [`#125`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/125) Sprint 2 backuup migration fix

### [`#124`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/124) Sprint 2 backuup migration fix

### [`#122`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/122) Admin layouts

### [`#121`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/121) Sprint 2 GitHub Deployment Actions #104

### [`#106`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/106) Student Controller, Model and Migration

### [`#119`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/119) Sprint 2 qa cohort

### [`#89`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/89) Fix for Issue #87

### [`#80`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/80) Sprint 1 merge error fixes

### [`#57`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/57) Laravel Automated Test Action

### [`#64`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/64) Student Profile Link 

### [`#63`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/63) Sprint 1 student view test

### [`#67`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/67) Sprint 1 navbar test

### [`#56`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/56) Sprint 1 Login fix/features and js moved to seperate files


## Fixed :heavy_check_mark:
### Merge sprint-3-deployment-fix #164 [`#`]() [object Object]
# Delta Team - Studio Management Commit Log :calendar:24 August 2021

* Update README.md

* Update README.md

* Sprint 1 Login fix/features and js moved to seperate files (#56)

* Reinstalled auth scaffold for project using jetstream, fortify and livewire. Moved models into a models folder to adhere to laravel 8 conventions

* commented out the registration in fortify.php to remove the ability to register a new user

* Changed it so login redirects to home page, changed login and logout button to display correct text. Added logout function to routes

* Added middleware group in routes so that if the user isnt logged in they can't access them

* added is_admin to users table, create admin panel view for admins use, made it so if user that is logged in isn't admin then they can't access admin panel

* removed js from view files and put them into their own seperate js files. Tested that the search works, unsure if the js from viewStudent view worksas we don't currently access that page

* added /home back to the routeserviceprovider file

* Sprint 1 navbar test (#67)

* Update README.md

* updated composer to latest version

* App working locally with Composer .exe updated, Composer packages installed, local database served with XAMPP, Dusk components installed

* Followed vid tutorial to create and use alt .env file and database file while running dusk tests, Two trial tests appear to work correctly

* Added a test for each nav bar item

* Added helpful to some files

* Local file .env.dusk.local removed

* Browser test file ExampleTest.php removed

Co-authored-by: s-winton &lt;64758520+s-winton@users.noreply.github.com&gt;
Co-authored-by: s-winton &lt;WINTST1@student.op.ac.nz&gt;
Co-authored-by: Matthew Revell (1000073025) &lt;REVEMW1@student.op.ac.nz&gt;

* Sprint 1 student view test (#63)

* Update README.md

* updated composer to latest version

* inital commit to install dusk

* first dusk test sucessful, visited /add-student

* wrote dusk code, tests ca't find input field

* created student-add test

* Readme changes (#75)

* Update README.md

* Update README.md

* Update README.md

* Update README.md

* Update README.md

Co-authored-by: Anthony Legg &lt;61127354+leggant@users.noreply.github.com&gt;

* Update README.md

Co-authored-by: Anthony Legg &lt;61127354+leggant@users.noreply.github.com&gt;

* Update README.md

Co-authored-by: Anthony Legg &lt;61127354+leggant@users.noreply.github.com&gt;

Co-authored-by: Anthony Legg &lt;61127354+leggant@users.noreply.github.com&gt;

* Update resources/views/pages/addStudent.blade.php

changed text input to email in the student form

Co-authored-by: Anthony Legg &lt;61127354+leggant@users.noreply.github.com&gt;

* deleted composer.lock due to conflicts with staging

Co-authored-by: Anthony Legg &lt;61127354+leggant@users.noreply.github.com&gt;

* Student Profile Link  (#64)

* Correction added to address issue #46

Have not yet tested this to ensure it works, local development environment is still incompatible with the composer configuration

* returned readme.md content from main branch

* addition of quotation marks on class names - pull request #64

Co-authored-by: s-winton &lt;64758520+s-winton@users.noreply.github.com&gt;

* Laravel Automated Test Action (#57)

* Update README.md

* updated composer to latest version

* addition of laravel-deployment-testing

addition of Laravel tests to be performed on push, pull requests to master, and staging branches.

* prettier code linter added for local use

to run this: `composer run-prettier` in the command line

* issue with linter resolved with prettierignore file

issue with configuarations that have `DIR__.` syntax linter was adding spaces to these files causing errors. files with this syntax added to the prettier ignore

* fixed the cache and database configs affected by the linter

* addition of linter check script

configuration will perform a check on commits during development and pull requests to master and staging branches

* Altered the triggers for testing and linter actions

* Addition of laravel dusk test suite configuration

* Correction of error on line 2

* Update to gitignore

remove conflict created with compiled package files

* removed compiled package files + added to gitignore

Co-authored-by: s-winton &lt;64758520+s-winton@users.noreply.github.com&gt;
Co-authored-by: s-winton &lt;WINTST1@student.op.ac.nz&gt;

* Sprint 1 merge error fixes (#80)

* correction made to routes, broken during merge

* Correction added to the github action dusk testing config

Included change to the .env.example config also

* debugging the dusk test action

issue with creating the test suite occuring on line 18

* debugging the dusk action tests + added a delete action to remove old workflow runs from the repo

* deleted/combined laravel deployment action with dusk action

still debugging database creation run

* removed the failing phpunit tests that shipped as default tests

* corrected error in script on line 27

* changed files back to what they should've been after merge

* Added links to external js files

* adding to student view test, trying to get user logged in

* Changes made to laravel dusk github action script

this required adding a dusk env file to be copied to a temp .env during each test

* altered the laravel-dusk action so it creates a test folder for the database

* addition of delete past work flow runs action

* removed the delete workflow script.

changed the database configuration

* key generation error now fixed in laravel dusk action

this change is for a new error in the migration command

* laravel dusk action migration error

removed a third flag in the migration command

* Addition of a --database flag to the migration action

* attempting to use mysql instead of sqlite for github dusk action

* Fixed missing name in dusk action script

* dusk action password error now occurs when creating a database

no password flag added

* dusk action password error now occurs when creating a database

no password flag removed

* altered the database creation script, remove quotes

removed the --user=root line

* added port + env configurations to the dusk test action

* correction to yml indents

* returned dusk script to a previous version

* correction of yaml indent error

* reverted back to using sqlite for dusk test

* adjusted the env.dusk file environment config

database permission error preventing a migration from occuring still

* adjusted the migration command to bypass commandline prompt

* returned test env to a local environment

* changed the file permissions on the sqlite test file

* updated database environment cofiguration dusk action script

* moved the creation of the sqlite db so it occurs before the key generation

* Added a mysql package to start an sql service

* Updated dusk to have env variables declared

in the script migration function

* Test db now working, but sqlite has issues with null values in columns

* attempting to use mysql in test in place of sqlite

* attempting to use mysql in test in place of sqlite

* not able to get the sqlite database to ignore null columns

errors are still preventing this script from fully completing the migration run

* re-added env lines to script

* attempt to use mysql instead of sqlite

* attempt to use mysql instead of sqlite

* re-added mysql lines to script

* added a mysql action package to script

* added a mysql action package to script

* back to sqlite which is not working

* back to sqlite which is not working

* New dusk test action script created using setup-php package

* Added the Browser test directory to the phpunit xml file

Testing to see if this will invoke the dusk tests contained in this file

* updated test script to include chrome driver required to dusk tests

* added node package installer, removed env.dusk file from dusk action

* Update phpunit.xml

code added for github action dusk script and is no longer needed.

* Sprint 1 new user (#81)

* created resource controller for creating a new user, added link to admin panel, created a layout and added resource route for users

* added create and index pages for user creation. Started working on processing requests

* Admin user can now create a new user through the admin panel

* Added edit and delete, logged in user can't delete themself

* created seeder for starter admin user

* Added a call to the userseeder class in database seeder file

* Added code comments

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt;
Co-authored-by: s-winton &lt;WINTST1@student.op.ac.nz&gt;

* Fix for Issue #87 (#89)

Remoed composer.lock from gitIgnore

* Sprint 2 qa cohort (#119)

* Added blank browser test for cohort, commented out registration

* Progress on browser tests for nav, cohort. Including login tests with user creation, and db:seed. Experiment with retaining login vs use DatabaseMigrations

* Tests login, navtests, studentview working. Problems with serving dusk.local env, Made createuser function for each test file

* Tests working every time, connected to local database

* Modified createadminuser function to not create admin if already exists

* Added cohort empty fields, overload tests

* Added admin-panel to navtests, Added test for view cohort page

* Building on login/out tests

* Added comments to browser test files

* Update resources/views/pages/addStudent.blade.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt;

* Update resources/views/pages/addStudent.blade.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt;

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt;

* Student Controller, Model and Migration (#106)

* resource controller and model generated for Student #issue #36

* Student route updated in web route issue #36

configured to use the new Student Controller

* Update to student routes, controller-issue #36

updated add student to have the blade temlate imported, updated the nav bar to use the new student controller, updated the student migration to have correct id attribute

* Updated notes and evidence migrations-keep relationship with student

issue #37

* Updated Pages controller, Student Controllers+tested - issue #36

deleted old and unused dashboard, changed index to student in pages folder, updated the web routes file removing unused routes. Tested changes, no new issues apparent through these changes

* updated add student, controller model, migration

These now include student ID fields #105, and must be unique. No error handling for these changes on the front end

* Migrations returned to orignal state-issue #36

Changes made previously will be re-added in new migration files

* Updated student migration to include first,last name

+added a character limit. changing id datatype breaks relationship with evidence, will need to change this migration before altering others

* updated new student form to include student first/last names

full name provided by the student model

* updated migration files, commented out notes-evidence #36

further testing required for these migrations, still adding errors into the database via inconsistent naming, datatypes of primary and foriegn keys

* updated student pages so these have `idstudent` in place of `student_id` #37

This ensures the templates use the student actual id and not the id of the record in the database

* Updated student migration, model, to use student username instead of id - #36

amendments also made to other migrations, to allow them to access student

* Commented out registration in the fortify config #97

* added papers table migration and model and update to cohort table migration. Added some relationships for Cohorts, Papers and Users

* added more migrations to update exisiting tables with foreign keys, and updated models with relationships and fillables to reflect those changes

* added semicolon that I missed

* started working on cohort crud

* finished new cohort controller and we now use resource route

* updated migrations with nullable field and added new migration to add paper id to users

* admin user can now assign 1 paper to a user(lecturer). Need to find a way for multiple to be added

* Sprint 2 - Blade Template Updates

Changes made to Dashboard, and student pages so these are more consistent with the log in form. Form elements also updated to use tailwind css classes.

* Remove name from cohorts resource route

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt;

* Remove old post route for cohorts

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt;

* Removed old get route for cohorts

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt;

* Changes made to the route for cohort

to correct bug

* Changes made cohort index route, changed string values to array

* removed redundant pages,api controller methods related to cohort

* correct to navbar cohorts route, comment out api contoller methods

* removed unused cohort button, fixed store form route

* corrected previous change to cohort controller index method

Co-authored-by: unknown &lt;scotms2@student.op.ac.nz&gt;
Co-authored-by: scotms2 &lt;53206496+scotms2@users.noreply.github.com&gt;

* Sprint 2 GitHub Deployment Actions #104 (#121)

* Updated dusk test script - issue #78

Removed `3306/tcp` replaced with `3306:3306` + `6379/tcp` commented out script that starts chrome driver

* Added action to call `php artisan serve` - issue #78

* Added port number to `php artisan serve` command issue #78

* Added port number to `php artisan serve` command issue #78

* added `./dock php artisan` commands to start server - issue #78

* added `./dock artisan` commands to start server - issue #78

* removed `./dock` replaced with `docker run` commands - issue #78

* Returned script back to using `php artisan` commands - issue #78

* Added artisan dusk test to the same action as `php artisan serve` #78

* removed env configs from artisan serve action issue #78

* removed `needs` from artisan dusk command issue #78

* Included .env variables in the dusk action 83-105 issue #78

* Added ports to dusk action commands - issue #78

* uncommented .env at start of script fix permission error - issue #78

* again removed env from dusk test action - issue #78

* updated project linter script

composer version no longer functions, now can be run using `npm run prettier`

* updated github dusk action to include user creation-issue #78

* replaced previous code commited with db:seed -Issue #78

* Addition of auto pull request assignment action

to automate assignment when pull requests are created, assign the author + 3 reviewers

* combined auto pull request assignment action

to automate assignment when pull requests are created, assign the author + 3 reviewers

* changed auto pull request assignment action directories

to automate assignment when pull requests are created, assign the author + 3 reviewers

* format error/changed yaml code structure for auto pull request action

* addition of pull request reminder action

commented out for testing purposes

* Updated env an dusk test action #78 #90

committing for testing purposes

* correct made on line 98 dusk test action #78 #90

committing for testing purposes

* reverted back to previous version #78 #90

committing for testing purposes

* Updated test suite to use phpunit tests - #78 #90

In place of the dusk test previously used, commented out

* test suite now working, but has failing test results #17 #78 #90

re-added the chrome driver action in this commit, in case this is causing an issue

* added auto assign reviewer action update

* added auto assign reviewer action update

* added auto assign reviewer action update

Debugging errors

* added auto assign reviewer action update

Debugging errors

* added auto assign reviewer action update

Debugging errors

* added auto assign reviewer action update

Debugging errors

* Added pull request reminder action - testing

If it works it should send a notification to teams channel if there is a pull request awaiting review

* Correction added to cron schedule

will run at 10 am mon-sat through to November

* Added basic structure for deployment check action #104

* Created a PR status action, to check heroku review app

on pull requests made to the staging and master branches. A failure will block the merge of the pull request until the issue is resolved and the review can successfully deploy to heroku

* Created an automatic assignment of authors

for both pull requests and issues. these have been tested and are working. Updated with all team members

* Creation of Issue Template that will standardise

issues on the repo

* Addition of user story issue template

* Removed review app test action, as this requires credit card #104

added action to assign pull request reviewers automatically

* Admin layouts (#122)

* added layouts to admin pages so they can load

* updated composer.lock file, correct heroku deployment issue

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt;

* Sprint 2 backuup migration fix (#124)

* pushing backup script to project repo

* fixed student last_name and username nullable for migration fix

* line 19 nullalbe add_updates_to_cohorts

* Sprint 2 backuup migration fix (#125)

* pushing backup script to project repo

* fixed student last_name and username nullable for migration fix

* line 19 nullalbe add_updates_to_cohorts

* line 18 -&gt;nullable();

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt;

* correction to database seeder file-conflict merge error

* Revert "Resolved Merge Conflicts"

This reverts commit 93722a849cd7ef3eede09a5e5821368f4dda62a3, reversing
changes made to b374d979159df3a13ad22f267e9c3c7a78f5ee60.

* Correct to dusk github action and css added

* Update resources/views/components/student-form.blade.php

* Update resources/views/components/student-form.blade.php

Co-authored-by: revellgit &lt;mrmattrevell@gmail.com&gt;
Co-authored-by: scotms2 &lt;53206496+scotms2@users.noreply.github.com&gt;
Co-authored-by: s-winton &lt;64758520+s-winton@users.noreply.github.com&gt;
Co-authored-by: s-winton &lt;WINTST1@student.op.ac.nz&gt;
Co-authored-by: Matthew Revell (1000073025) &lt;REVEMW1@student.op.ac.nz&gt;
Co-authored-by: unknown &lt;scotms2@student.op.ac.nz&gt;

## Commits :heavy_check_mark:
### [`#0ebd78f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0ebd78f93b8ce66288f2ad0b9419804849ed4c12) 66690702+github-classroom[bot]@users.noreply.github.com 
Initial commit 

### [`#e050c94`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/e050c9415ca05dd69b825238c839a4ea78670d5c) WINTST1@student.op.ac.nz 
updated composer to latest version 

### [`#f3572a9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/f3572a9eebaf86c6296be1511f2023cd6faf854d) 64758520+s-winton@users.noreply.github.com 
Update README.md 


## Merged :heavy_check_mark:
### [`#126`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/126) Sprint 2 Completion

### [`#86`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/86) Sprint 1 - Deployment Request

### [`#75`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/75) Readme changes



---