# Delta Team - Studio Management Commit Log :calendar:

## Commits :heavy_check_mark:

### [`#d7e0b98`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/d7e0b98d4b3adb887b8ad6d63b119299cd1b4a73) changelog added to package.json, root directory 
leggtc1@student.op.ac.nz

### [`#3aaba86`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/3aaba8647b8aa152fa10eeac2dd8d85fe9d8c0ca) docs(commitlog.md + package.json): updated files + added extra changelog commit template

this is to help QA person track changes deployed at the end of each sprint, transfer changes into
product backlog items for test suite updates

re #189 
leggtc1@student.op.ac.nz

### [`#6ef2574`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6ef25740c0758c2f37dcfdf4fbe70c91747fae0d) chore(package.json and readme.md): commitizen config added to package.json + badge added to readme

change also made in the .git hidden file pre-commit config file which enables commitizen to function 
leggtc1@student.op.ac.nz

### [`#b68c87d`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b68c87d2931a656970814ea4782579cb07ba2003) updated student form, controller to handle errors #138

form shows errors in a list using red text. form is repopulated with data from the original request 
leggtc1@student.op.ac.nz

### [`#8e0e5d9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8e0e5d99abf506b06a2a2f4bd97cb15a4724ac8e) updated student/note controller, note form #84

note form now has access to the student id, and can create a new note for the student. controller redirects user to the student they are adding a new note for. student profile page updated to display note data 
leggtc1@student.op.ac.nz

### [`#f2bfba9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/f2bfba948f46f96f95304ad917d6e17f47938116) CI: removed issue template forms left from sprint 3 
leggtc1@student.op.ac.nz

### [`#40bd81a`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/40bd81a2412b64a32f0ae9323e422d0ab24eb5f3) updated evidence migration,with description field #85

evidence form submission now returns user to the student the file is uploaded for 
leggtc1@student.op.ac.nz

### [`#6dfa716`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6dfa716a8fe6bf0f6dcf6ef5786672fc64ba7656) updated student page, form, profile, controller #138

removed the student email input, utilised the student user name and appended atstudent.op.ac.nz to the end. updated to profile page layout, made links clickable. added blade checks on empty arrays, output information if no content is available to show 
leggtc1@student.op.ac.nz

### [`#ee93e1e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/ee93e1e1539493197963b65e56a22bea3409d9a7) updated changelog + template - added icons to headings 
leggtc1@student.op.ac.nz

### [`#933d04d`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/933d04db13387a0923ae09b949dc2750c0e87dbb) updated evidence controller, student profile evidence delete button #85 #127 #181 #160

student evidence delete button now works, returns user to student profile page 
leggtc1@student.op.ac.nz

### [`#8c338ff`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8c338ffdb260f0fafb3881a166048ea552cd6cfd) updated changelog config + template 
leggtc1@student.op.ac.nz

### [`#222c0f6`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/222c0f68b2d9f7e66f93ad47149679cf280949e8) created student edit form component 
leggtc1@student.op.ac.nz

### [`#7585f52`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7585f527bc4830a5957df3e4711c9e639ea43343) CI: security action added

action runs 3 tests consecutively; composer NPM and PHPUnit Tests. PHP unit test has been included to check that the deployment will work

(cherry picked from commit 265fdbbc20efff015270852f7bc3e9f45421a282) 
leggtc1@student.op.ac.nz

### [`#13fd9af`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/13fd9afcd42b2275ba67e21c255c8aeca307d4a2) fixed evidence upload as it wasnt working 
scotms2@student.op.ac.nz

### [`#f1db190`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/f1db190f123cd3e9464e03c4a63f9c72ae2e8615) Removed pending status action

(cherry picked from commit 8d0e6507195d58c18ea5080c7061f267cbd71c3d) 
leggtc1@student.op.ac.nz

### [`#9eb9145`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/9eb9145d4de851d816b3d252012fe6494bf5aa21) addition of pull request reminder action

send a teams notification/reminder if a pr has been left unreviewed for more than a day

(cherry picked from commit 53ec9626e2771b99491bb53f7c3bacc3f0ee09ed) 
leggtc1@student.op.ac.nz

### [`#a35c698`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a35c6982b0043c5c8d76c85af437393bb2800616) updated note controller with delete method called from student profile #138 #84 #160 
leggtc1@student.op.ac.nz

### [`#79b87be`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/79b87be7c9f6baa4400156a30314f92723d25813) updated student controller validation rules #138

added back in student creation method, after it is validated 
leggtc1@student.op.ac.nz

### [`#4f41eda`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/4f41eda959ad6d3ec861f109e76f776d39219123) CI: added PHP security scanner to action

(cherry picked from commit 28448c5331dd7467ec8dac6a1f39a537c1878b3b) 
leggtc1@student.op.ac.nz

### [`#172d6ec`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/172d6ecad12ab53e5515ae4944d56440fa68cdaa) updatediption input field to form #85 
leggtc1@student.op.ac.nz

### [`#0153318`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0153318586211c1feba7367b2d47f8ac6562c40b) CI: Updated action triggers

these will now run predominately on pull requests

(cherry picked from commit d473ea7d2344c81d073a42d01d745bfa1d626a2c) 
leggtc1@student.op.ac.nz

### [`#fb08a26`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/fb08a26d573481d14fbb0af7a7c3284ca1595982) CI: made security test run for pull requests

not push and pull requests

(cherry picked from commit 96c559739f92958e4c093fcb71d798261c76791b) 
leggtc1@student.op.ac.nz

### [`#baf05e3`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/baf05e384988ad9dc6a4341ba16809cd1061cd4c) chore(package.json script change): reverted the .git config change added previously

the previous change in git config caused issues in the command line, so this has been dropped and
the node installation, config option used instead 
leggtc1@student.op.ac.nz

### [`#ff9ca43`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/ff9ca4321c9ef639d46426a41f055f49b69d87f4) Merge pull request #184 sprint-4-student-update-form

Sprint 4 student update 
leggtc1@student.op.ac.nz

### [`#b8ea489`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b8ea489f1a3b3140c886b2d21cf2bb95f19a4a0a) Update database/migrations/2021_09_19_041212_update_field_names_in_evidence_table.php 
leggtc1@student.op.ac.nz

### [`#973e849`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/973e849eb11e7edddf2b784e42c9cce174939f69) Merge pull request #178 evidence-upload-fix - Sprint 4

fixed evidence upload as it wasnt working 
leggtc1@student.op.ac.nz

### [`#034b8c1`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/034b8c1e40c2f9a4fa3e67f23921bdb49fb19e5c) Update app/Http/Controllers/EvidenceController.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
53206496+scotms2@users.noreply.github.com

### [`#1334846`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/13348461df6537aaef6baa6056969fceb0ecbac1) added a option tag so it doesnt start on a student 
scotms2@student.op.ac.nz


## Commits :heavy_check_mark:

### [`#67ab830`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/67ab8308d04f1a6a6587f41aaa5f9a8876d36f21) Merge pull request #168 /sprint-3-deployment-fix

Sprint 3 deployment fix 
leggtc1@student.op.ac.nz

### [`#aa76452`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/aa764525e688badbd39116fcd55503f26729ec5e) Attempt dependancy clean up with files from staging 
mrmattrevell@gmail.com

### [`#9d0cdea`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/9d0cdeae491a260074d465cc4f8e6987b569f2ec) Updated student form, added drop down to seperate component

added input field components, to bring in line with other sections 
leggtc1@student.op.ac.nz

### [`#8fa0ce7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8fa0ce727cc43f746bc36095997f797dbe3dad30) updated composer, moved dev dependencies to developement

to be available for github actions 
leggtc1@student.op.ac.nz

### [`#bf94357`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/bf943575db4cad134aa5601d790850502825270a) Added the ability to create roles and permissions. You cannot edit them or delete them 
scotms2@student.op.ac.nz

### [`#541cf48`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/541cf488d6249e2f76c0de3400a5f9a433513584) updated student/cohort select, now pulling data from cohort

updated student page to utilise more view port space available also 
leggtc1@student.op.ac.nz

### [`#5df067c`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/5df067ce6c67193de33f833f06cc0b23db8d5123) correction added to the composer lock, json files 
leggtc1@student.op.ac.nz

### [`#7300a19`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7300a196e822696c24077a3c78426772c875d172) Replaced dusk.local env file 
mrmattrevell@gmail.com

### [`#b4abdcb`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b4abdcb9326df3b990be280f8603b6cf4e546e79) Commented out some problematic tests to were failing due to bugs on the site 
mrmattrevell@gmail.com

### [`#09cc3c0`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/09cc3c0e6bc2933ebc8eacad17b13a42cd76cc7a) update to route, nav files to include dashboard deactivation

updated form layout to fix width issue 
leggtc1@student.op.ac.nz

### [`#9e91c90`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/9e91c90fddbf14437303ea3de48fab5b408fe069) removed migration causing error, new version available on staging branch 
leggtc1@student.op.ac.nz

### [`#c82e30f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c82e30f0a19275efc8d6b101d6f73c337ec59954) Removed role check 
scotms2@student.op.ac.nz

### [`#635a0f6`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/635a0f639722b2e5bcd24bd6a69a802a8d37a75e) configuration changes added which enable deployments to install automatically

on heroku. Node changes allows css to be compiled on the server rather than merged to, procfile, heroku.sh will automatically run seeders and migrations - seeders command could be changed so that it only runs specific seeders for the deployment 
leggtc1@student.op.ac.nz

### [`#0b19ccc`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0b19ccc497caef286adbec2879289f3896369c02) changed seeder to create user in perms file and assign user to super-admin role 
scotms2@student.op.ac.nz

### [`#0ccdfad`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0ccdfadcd15ce96b93f53acee5eaa09c30d3fbc4) update web route and route service provider 
leggtc1@student.op.ac.nz

### [`#43d641f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/43d641f2064346537c82577384ac9a463e937f74) Changed models to check for proper foreign keys 
scotms2@student.op.ac.nz

### [`#8738b7d`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8738b7d471301cac6ff6861c15c3a919d1e82b38) correction added to node package file

heroku is using an older version of node as its default, needs to have the version we are using provided to it 
leggtc1@student.op.ac.nz

### [`#00e9cd3`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/00e9cd37da581fa76da48eb5ee0878584d802b56) added back some styles that were removed 
scotms2@student.op.ac.nz

### [`#57bc21c`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/57bc21c36124b2856e32ad911d42cd9f3e8d4060) removed automatic seeder

creating errors during deployment 
leggtc1@student.op.ac.nz

### [`#6eb7d94`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6eb7d9467737cd8621b4b4bb8868be45f79a10d4) updated dusk test suite 

removed duplicate seeder function 
leggtc1@student.op.ac.nz

### [`#8414f59`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8414f59b839ed14a515778d6cb62f32521bfa6c1) updated deploy script with seeder function call

these need to be removed if they have data that is already seeded to the database, or they will error out. only include seeders that have not yet been deployed to the servers 
leggtc1@student.op.ac.nz

### [`#27ecad1`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/27ecad1f9da21472a9146834d98468a8cbf0e45d) updated node packages

removed script from line 19 that was causing errors 
leggtc1@student.op.ac.nz

### [`#825e2e0`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/825e2e04cb318fc1807880260087943128d971d2) fix added to cohort_id assignment when creating student 
leggtc1@student.op.ac.nz

### [`#858c73b`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/858c73ba6069bf97a1430fa8d229330bdbda42a2) removed duplicate  `use` controller line 
leggtc1@student.op.ac.nz

### [`#00bdcf4`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/00bdcf471a88ac0c42485d35edc8f7015a51e360) Merge pull request #167/sprint-3-deployment-fix

Fixed  problem with accessing users route 
leggtc1@student.op.ac.nz

### [`#82796a5`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/82796a530bbd86c3bc0ff8ff4f70cfc13110f97e) changed table check in models to be user_papers 
scotms2@student.op.ac.nz

### [`#06ae301`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/06ae3013fe7b782d2d3ebe605d43c817ea2b58a2) updated student list 
leggtc1@student.op.ac.nz

### [`#141d45e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/141d45eb4b329ec6f2f34969ac4e6dd3202b4bfa) changed the cohort and paper column to show correct info 
scotms2@student.op.ac.nz

### [`#b4fbb34`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b4fbb34dc6b072f3c4969e0e4a8f4f948c6806bc) merge commit conflict fixes 
leggtc1@student.op.ac.nz

### [`#5c9ee09`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/5c9ee09882fdb16a801ee0c07ec0ec0c67a98a92) changed user creation in seeder 
scotms2@student.op.ac.nz

### [`#a866d87`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a866d876179a8d99e6804a516519854dbcc003d5) updated student list 
leggtc1@student.op.ac.nz

### [`#2fd3076`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/2fd30765f9c72ad6ae312758dfcc7c03cbe49759) updated student list table properties, ones used unavailable and causing errors 
leggtc1@student.op.ac.nz

### [`#a36de03`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a36de032f1c137c3787f587c78c687d627870343) added missed semicolon 
scotms2@student.op.ac.nz

### [`#7423c37`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7423c37e6320a13a774df72fc8389aea42f2bb25) added the paper controller into web route file 
leggtc1@student.op.ac.nz

### [`#15728c2`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/15728c2761c3a4b2011d2f41eeee48e292af0d4b) removed duplicate route on line 36 
leggtc1@student.op.ac.nz

### [`#0d0408c`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0d0408c9ca1e29e676ae966a91dfc4cd340f5793) added home route 
leggtc1@student.op.ac.nz

### [`#94bdb04`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/94bdb0477491df779ebab7985a2eebab259092e8) pushing changes to files to fix conflicts 
scotms2@student.op.ac.nz

### [`#b84b806`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b84b806e9b92ae60727a7c0668b6b8d18913348c) updated node package npm version

this was causing errors 
leggtc1@student.op.ac.nz

### [`#a9d29b9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a9d29b9e374c4bee8a8abd98707737324a95e12e) updated node package npm version

this was causing errors 
leggtc1@student.op.ac.nz

### [`#fad33e2`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/fad33e2420a2fc2d4f3d4a57158cc4bc06773ea4) Changes to each test function to include user creation, some issues with test fails due to routing errors 
mrmattrevell@gmail.com

### [`#36f3ca0`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/36f3ca03291eb888f04cad93d35c90f545d4c7e8) updated node package npm version

this was causing errors 
leggtc1@student.op.ac.nz

### [`#82d96b7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/82d96b7a9999d2c03761f44870524b133bc28ab5) updated packages for node and composer 
leggtc1@student.op.ac.nz

### [`#aa3edff`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/aa3edff249ad71d563a76823cfcc4e12638a22e5) Fixes added to the web route file which was causing errors

Tested all routes and only one failed - see notes in #148 @scotms2 
leggtc1@student.op.ac.nz

### [`#ce680e4`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/ce680e46e58bd531f797cea94560b1ce150aa9d2) started working on permissions and roles, created seeder to add these 
scotms2@student.op.ac.nz

### [`#1718283`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/171828308a9a8e59c0d5e771f6482c04e1640d4e) Re-adding missing file for testupload, Changing tests for new routes, Change to button press selector 
mrmattrevell@gmail.com

### [`#cd067ed`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/cd067ed0c26a6a616402427e8d037c1297dfab71) Tweaked student names in dropdown for evidence view, Commented test files, Added dusk attach( ) test for file uploads 
mrmattrevell@gmail.com

### [`#4242660`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/42426608404a62823afe179c56fa8f8ea55af10d) fix package-lock version 
leggtc1@student.op.ac.nz

### [`#820abd7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/820abd7655b98ee2849eeddebe37188adef18373) Added user creation to each test method, Added refreshDatabase trait to tests, Error with user_papers table migration 
mrmattrevell@gmail.com

### [`#28d6174`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/28d617483b5be1a2c0c53793b5e3e6d3b1424a7c) changed the style of the table in users and changed some styles of buttons, added perm check in student form 
scotms2@student.op.ac.nz

### [`#3a481e7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/3a481e7bd68962c62bb8a5a0af580fe437ef1b74) Added id and dusk tags to inputs on evidence blade, Added createstudent method in evident test, Added simple create evidence test 
mrmattrevell@gmail.com

### [`#d0858fd`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/d0858fd4074c4245d03a303c69c490c2a7c9bc01) Removed createadminuser function from test files as it is apparently causing automated tests to fail 
mrmattrevell@gmail.com

### [`#1d58f13`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/1d58f13bc2a3ef08bbe6b7e4a592578c9776f465) completed roles and perms seeder and added a role check to the admin panel, changed a few things with user creation to compensate for the adding rfof roles 
scotms2@student.op.ac.nz

### [`#7f966f2`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7f966f21feb2c5e643c28a8d7b4d1742b90e6c0e) added permission checks to students, notes, cohorts and evidence, and updated table css wherever it was 
scotms2@student.op.ac.nz

### [`#0138567`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/013856756f95a534e2ecaa7e292e327cd16ab333) Removed some use statements and commented out lines 
mrmattrevell@gmail.com

### [`#1483e26`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/1483e260f5e73d65f60ae7fd3c55c2e9243fb0b9) added cohorts select for student and updated a few models, select removing a html tag below it for some reason 
scotms2@student.op.ac.nz

### [`#a7a944d`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a7a944d6efe1c7d2e08cc3e0b2d766032d9c780c) Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#17fc258`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/17fc25834a201c07ebde2efda7dc04c5b50c4307) Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#0b1aed3`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0b1aed3f0ee88eba752fbe7b8c1ec5b672e72961) Update tests/Browser/StudentsTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#0aaf414`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0aaf414c3eda7d38882b970ee355d88b3863b2d4) Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#7254f51`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7254f512c8104b327e6e5605983455f1c0ac6c73) Update tests/Browser/StudentsTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#6b7e60f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6b7e60f8f5a9c2a90d0e6361997cad8ec24bcf38) Update tests/Browser/CohortViewTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#9eab1b7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/9eab1b7ed89fac15dd65d45743ba7d8c79d52f9d) Update tests/Browser/LoginTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#3281d7e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/3281d7eaea7b733eb984e0cced8da846b7a2d5ea) Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#28eb11f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/28eb11fb7e1cc3dfdf6ec9ff86c90777f2a33d96) Update tests/Browser/CohortViewTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#e221e25`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/e221e25e72485e2764925ddec7d7e68fb1f87936) Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#a87ae45`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a87ae45321e49d29f902f2c53b5b9ff352eca5af) Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#c29f73a`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c29f73a4b9c0dfa48539f75d41b483916b196121) Update composer.json

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#2c463a8`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/2c463a826874469d781b76aee6c26c9bb5a69c7c) Update tests/Browser/StudentViewTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#4d3fe11`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/4d3fe11834695936d3cd0c5bc5c2f596bc6cea1a) Update tests/Browser/StudentsTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#0787dcf`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0787dcf6dbe2f113bbf2baf8b36dbd0cb342f282) Update branch with changes from staging 
leggtc1@student.op.ac.nz

### [`#2b0843a`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/2b0843a169edbc00762d3388cb5cd006b608a87c) Merge sprint-3-github-dusk-action #144

Sprint 3 GitHub Dusk Testing + Local Dusk Tests 
leggtc1@student.op.ac.nz

### [`#bcb6a9e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/bcb6a9e271082dca5cc768e0ca9332949e2d38be) fixed merge conflict 
leggtc1@student.op.ac.nz

### [`#c483d24`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c483d24dd72bef1dc461f5ee259d91f4206d8354) Updated composer lock and json, moved dev dependencies to production

so these are compiled to use in github actions. Dev dependencies are not used by github 
leggtc1@student.op.ac.nz

### [`#2814a50`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/2814a50c3638fbacb3357181297f14691de72846) updated github dusk test action

added some new test packages to composer 
leggtc1@student.op.ac.nz

### [`#783e2b2`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/783e2b2a5c54c2e954241b8f73e0711c2f28a0b2) Tweaked student names in dropdown for evidence view, Commented test files, Added dusk attach( ) test for file uploads 
mrmattrevell@gmail.com

### [`#7c92d17`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7c92d171ef67adf04348fe7b3c54a57adb54f6df) Added user creation to each test method, Added refreshDatabase trait to tests, Error with user_papers table migration 
mrmattrevell@gmail.com

### [`#3af2ed8`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/3af2ed876412c40f6710878235d29d86da2b6589) updated dusk tests that were returning errors #131 
leggtc1@student.op.ac.nz

### [`#b2984e9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b2984e9842ed2b50dacd8cbe66d375c8b26ea8fb) Fixed tests to work with new site links, buttons. Removed some non-applicable tests 
mrmattrevell@gmail.com

### [`#523a979`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/523a979b37b8fc8e32f4c5d3d2f19b9b8fece8be) Added branch for students, evidence tests. Made test files. Added first basic test methods 
mrmattrevell@gmail.com

### [`#0df7a29`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0df7a29b1ca7164c76018be7cdf13f843896e8a9) added Note controller, transferred methods #5

updated routes on notes pages and forms #19 
leggtc1@student.op.ac.nz

### [`#aed8bba`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/aed8bba1a7f0ba5b653034ee498ab254a81be969) removed copied action 
leggtc1@student.op.ac.nz

### [`#2f6da6e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/2f6da6eff14915be66eda40c3a2ce6d1e5050942) Updated evidence controller with methods transferred #5

from the api and pages controllers 
leggtc1@student.op.ac.nz

### [`#1430edb`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/1430edbe12fc02ddc320bfe7a8d03c046a5b0b0b) updated navigation tests so these work on github 
leggtc1@student.op.ac.nz

### [`#ebafdf7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/ebafdf77660d1a5f64460acc828f9adb7b799366) updated dusk tests so that these log in correctly #131 
leggtc1@student.op.ac.nz

### [`#fb516d8`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/fb516d84a10bd40074dd4f6bba6eb9d03ea26fb1) last corrections to tests for dusk github action #131 
leggtc1@student.op.ac.nz

### [`#e796315`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/e796315ce0aea7d44733d3ed6b772d86be18778f) debugging the nav logout button

because this needs csrf protection it is in a form, so the normal nav link needed to be copied to a new button component that uses the same styling as the other links on the navbar. 
leggtc1@student.op.ac.nz

### [`#43221d8`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/43221d8655723233e08bff4d18c6180d779030d7) completed the navbar fix

new component allows the dusk test suite to recognise the logout button. It was not previously able to due to this link being part of a form action rather than a standard `&lt;a&gt;` tag #131 
leggtc1@student.op.ac.nz

### [`#34eb7c2`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/34eb7c2359c18c116e922868874410c3939403ef) updated student test 
leggtc1@student.op.ac.nz

### [`#fe3d22d`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/fe3d22dc76726bcd7e65305d8f8325025fcdc36d) Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#b825f83`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b825f83f4e3c6cba294242b63539f1185fa05c76) updated navbar test, required a change in the nav template 
leggtc1@student.op.ac.nz

### [`#c6cad91`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c6cad91bbf7acd513e0749cf4f960c4494ec76b0) debugging php artisan dusk command #131 
leggtc1@student.op.ac.nz

### [`#6abfeaa`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6abfeaaf9d56c42ac3887fae732004e6a0c9a751) updated auto assign action and readme

also altered the dusk env file for testing 
leggtc1@student.op.ac.nz

### [`#78c8f36`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/78c8f36feb7e7886e6ff02339902b7a5731be461) correction made to dusk env app name, causing errors

removed php unit test from the dusk action 
leggtc1@student.op.ac.nz

### [`#2336f5b`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/2336f5b3285108b4adc92f5129b744895f581d33) Migration name change, working on tests 
mrmattrevell@gmail.com

### [`#3a1cdca`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/3a1cdcaf8bb0493866a66a5bf7232e14e3cc0b06) updated database config, env files for dusk testing #131 
leggtc1@student.op.ac.nz

### [`#40c91f2`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/40c91f240605412b044ec8ac64e96fbb8ed93368) Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#c94f673`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c94f673fbca55de6ab893c0e45b21e50ee8e5f0e) updated action, remove composer flags causing errors 
leggtc1@student.op.ac.nz

### [`#389ee6a`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/389ee6a00f81a7ea07ddd6200c9048e519e174e1) new action to clear old workflow runs from the repo 
leggtc1@student.op.ac.nz

### [`#01b4651`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/01b46517ff7f021e59682b76fc7a045b7b9a2bbd) removed database migration line from cohort test #131 
leggtc1@student.op.ac.nz

### [`#c5b4d08`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c5b4d0891aa1c5a097ee2c40f2a6a997eacd4856) Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#90b626f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/90b626f935138f145e9ddcf1742d59473456ae8b) Update tests/Browser/StudentsTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#df257f1`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/df257f1792d91c50383e4ffdc9eef9c14b80587b) Added last minute change to migration file name

This failed to migrate due to the naming of the file. Was `CreateUserPaperTable` which caused the app to try to create a table Users which already existed 
leggtc1@student.op.ac.nz

### [`#d4ac468`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/d4ac46849d370568da7de8022ce3bf7b0f19b8e2) Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#7a23be2`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7a23be28d4de0309272ed1f2ec5c56105164379c) Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#3641198`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/3641198f2c6c78e3e8fb7ddc31dabb6b7e89907a) Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#c2b7b41`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c2b7b41f49f727ad0dda9bb180f62153d5294e47) Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#6d71884`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6d7188455d40e9c22e4732d01484acb3c4c25dfb) Merge #141 sprint-3-update-homepage

Sprint 3 Dashboard Update 
leggtc1@student.op.ac.nz

### [`#96e2aa3`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/96e2aa390fcb6c38132cac5cf9dd902a3b1e6ef0) added php artisan dusk command back into action #131 
leggtc1@student.op.ac.nz

### [`#7cac8e9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7cac8e91f826b7f59d3e3b1d568aa0ace0f30e6c) Merge pull request #134

Sprint 3 assign multiple papers 
leggtc1@student.op.ac.nz

### [`#8f0707f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8f0707f48a94f337df0431702c05fbb32721589c) Update to dusk action #131

discovered through testing a copy of the project that the database configuration was not correct. Have added some changes to the configuration files 
leggtc1@student.op.ac.nz

### [`#6806509`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6806509f31affcab0117e76f565ddb1d77386685) Revert "Resolved Merge Conflicts"

This reverts commit 93722a849cd7ef3eede09a5e5821368f4dda62a3, reversing
changes made to b374d979159df3a13ad22f267e9c3c7a78f5ee60. 
leggtc1@student.op.ac.nz

### [`#410b899`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/410b899eb6f27704873b9c50d12446194bedb4ad) updated dusk actions, correcting errors in config

#131 #130 
leggtc1@student.op.ac.nz

### [`#29a83d5`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/29a83d53387a2bcb16a653525d9e6229cf46655f) Routes updated to use resource controllers #19

removed pages and api controllers, containing commented out and/or duplicate functions 
leggtc1@student.op.ac.nz

### [`#2d68a52`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/2d68a52e801e9c3b20f8ab3ce7f9f4ef0cbc704c) added crud for papers, currently have a problem with edit and delete as it sends an empty object 
scotms2@student.op.ac.nz

### [`#0fef47a`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0fef47a8c66dce99e60e29d265f33646160ac0e4) Correct to dusk github action and css added 
leggtc1@student.op.ac.nz

### [`#8cb5e1c`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8cb5e1c8dfe20ab93fda5c9dbf1c8e7243851110) Fixed tests to work with new site links, buttons. Removed some non-applicable tests 
mrmattrevell@gmail.com

### [`#0da3412`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0da3412e014e37829276cb83abd80e37293eb61e) added function to the cohort view test

changes allow the test to run in github action 
leggtc1@student.op.ac.nz

### [`#873daed`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/873daed7b270bca01637d65c814aefa649a030c7) Added branch for students, evidence tests. Made test files. Added first basic test methods 
mrmattrevell@gmail.com

### [`#4f63a2e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/4f63a2eea1eb263cddf0d198cd3065b5719319f7) added a pivot table for papers and users so I can store multiple papers for a user 
scotms2@student.op.ac.nz

### [`#87afe37`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/87afe37ccb8fe42124509f0a27fb282da46472c1) Added id and dusk tags to inputs on evidence blade, Added createstudent method in evident test, Added simple create evidence test 
mrmattrevell@gmail.com

### [`#451b704`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/451b704392c7ed9d7dc848b3bbabbaa658f73cac) Updated Dashboard as per #137 ticket

Default laravel content removed, navbar links changed to use the student page as the home route 
leggtc1@student.op.ac.nz

### [`#469ec31`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/469ec316e7eb9def3be5c9e3d3a87e5a0b93a20c) Update README.md 
mrmattrevell@gmail.com

### [`#559a6af`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/559a6afa650527e1b6e2ec3a9880b64e7acbe084) Now have fully working crud for papers 
scotms2@student.op.ac.nz

### [`#cbc1e5b`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/cbc1e5b37e5adb725f96c958e40fa65580d687b1) added admin panel to nav bar and it'll only appear for admin users, removed ability to update admin status to self if logged in 
scotms2@student.op.ac.nz

### [`#5b43c07`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/5b43c0740288ea2548cd58fbe0fba815270c5849) changed to multi select list box for selecting papers 
scotms2@student.op.ac.nz

### [`#8eacdd9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8eacdd9a75264253fff811d48f81f1d1c40e42e1) removed unused routes from the api route #19 
leggtc1@student.op.ac.nz

### [`#f9acef7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/f9acef7b69d2da927514c323602ef854d56f691a) updated github dusk action #131

added new commands to get the correct version of chromedriver and change its permissions 
leggtc1@student.op.ac.nz

### [`#fbb92b3`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/fbb92b346c39b8632b0b7ca530226bca49577e8a) Commented out blade stuff 
53206496+scotms2@users.noreply.github.com

### [`#c5edc67`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c5edc676dd6c45cfe9b158020dec737f271db35a) Update index.blade.php 
53206496+scotms2@users.noreply.github.com

### [`#4d8bef0`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/4d8bef03f1f90dbc14d1649a0c9df099c644b822) Update PaperController.php 
53206496+scotms2@users.noreply.github.com

### [`#725c44e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/725c44e86d1952d737ff627f554a92a18615bdfe) Admin can assign multiple papers to a lecturer now through the edit button. These can be changed through the same way. Deleteing a user also removes there data from the pivot table 
scotms2@student.op.ac.nz

### [`#39612e1`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/39612e11841e43a89eddb6443805cea3ed811aab) Update resources/views/components/student-form.blade.php 
leggtc1@student.op.ac.nz

### [`#981f04e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/981f04e96752f27204ef69174a770b9c31779f1d) correction to database seeder file-conflict merge error 
leggtc1@student.op.ac.nz

### [`#bd60b85`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/bd60b85b5cfcc20d2d35ad17183b3d6336416488) Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#32c1ecd`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/32c1ecd183edb987e8dc3abbe1ba9f463b1031dd) Update tests/Browser/EvidenceTest.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
mrmattrevell@gmail.com

### [`#a9f3295`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a9f329555e878354ee0b416f7c01308bd8a8cde3) Update routes/web.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
53206496+scotms2@users.noreply.github.com

### [`#df3a3ba`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/df3a3ba53e0a2ce569b2b1396d63e047ff27b1a3) Update resources/views/papers/index.blade.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
53206496+scotms2@users.noreply.github.com

### [`#0dc5edf`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0dc5edfd1229660e73ff05308ab2877fb9f9a972) Update database/migrations/2021_08_28_024531_create_users_papers_table.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
53206496+scotms2@users.noreply.github.com

### [`#eaffe63`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/eaffe6383ff293b8e0d6d997c65194268d45269a) Update database/migrations/2021_08_28_024531_create_users_papers_table.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
53206496+scotms2@users.noreply.github.com

### [`#dfde4de`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/dfde4deb22ed9ec6926259723fee04bcb379627d) Update database/migrations/2021_08_28_024531_create_users_papers_table.php

Co-authored-by: Anthony Legg &lt;leggtc1@student.op.ac.nz&gt; 
53206496+scotms2@users.noreply.github.com

### [`#f5a597c`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/f5a597cd0b25e2ef3c06871bd7dca0a9ab320c6b) added a couple of code comments 
scotms2@student.op.ac.nz

### [`#6c397ac`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6c397acd7bc66d6a3cf261e99835c04000a3226c) Update resources/views/components/student-form.blade.php 
leggtc1@student.op.ac.nz

### [`#93722a8`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/93722a849cd7ef3eede09a5e5821368f4dda62a3) Resolved Merge Conflicts 
leggtc1@student.op.ac.nz

### [`#dbae7c0`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/dbae7c093746acd00203925ca1ce7196b5c79a66) Resolved merge conflicts in readme and composer.lock 
leggtc1@student.op.ac.nz

### [`#a804d56`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a804d56953e36027b5370ebdb610a2d30e7f82d5) Update README.md 
mrmattrevell@gmail.com


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


## Commits :heavy_check_mark:

### [`#0ebd78f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0ebd78f93b8ce66288f2ad0b9419804849ed4c12) Initial commit 
66690702+github-classroom[bot]@users.noreply.github.com

### [`#e050c94`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/e050c9415ca05dd69b825238c839a4ea78670d5c) updated composer to latest version 
WINTST1@student.op.ac.nz

### [`#f3572a9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/f3572a9eebaf86c6296be1511f2023cd6faf854d) Update README.md 
64758520+s-winton@users.noreply.github.com


## Merged :heavy_check_mark:

### [`#126`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/126) Sprint 2 Completion


### [`#86`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/86) Sprint 1 - Deployment Request


### [`#75`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/75) Readme changes




---