# Delta Team - Studio Management Changelog
<!-- auto-changelog-below -->
<!-- auto-changelog-above -->
## [v1.0.0](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/compare/v1.1.1-beta...v1.0.0) - :calendar:2021-10-18
CI: Github Action Updates
new actions were added to test the current status of the live test and production apps. Status badges for these have been added to the repo readme.MD file. fixed a bug in the pull request reminder action; time adjusted to NZST. Fixed bug in the laravel security checks action #195. All changes confined to GitHub actions, no production code changed
### Merged :heavy_check_mark:
- CI: Github Action Updates [`#218`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/218) :octocat:
- Deployment evidence fixes, merging changes into other pull request that's up.  [`#211`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/211) :octocat:
- Sprint 4 evidence upload to aws [`#197`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/197) :octocat:
- Addition of Student Active Status [`#185`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/185) :octocat:
- New Studio Roles and Permissions [`#186`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/186) :octocat:
### Commits :heavy_check_mark:

-  refactor(user admin forms): user Edit and create page ui updates + notes and evidence [`92c9a4b`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/92c9a4b1f3a4f1a4f265ecddde3d8cef4faed01c) :octocat:
-  refactor(admin panel routes, forms): changes in response to client feedback on the project [`91fa173`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/91fa173e65419725dab6b0d1bc4530dc255c25ec) :octocat:
-  CI: Github Actions Updates [`d56a08b`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/d56a08bb86a20fd8c8d1df0d3f2d8676d93bc3e4) :octocat:
-  refactor(admin/lecturer permissions): lecturer role created to allow for them to be separated [`6110b88`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6110b88a3e04166aded29ad6fb1e9b432a0d958d) :octocat:
-  updated student evidence form validation [`6ce02ac`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6ce02ace0c5e09856337eeb6c48880bd2555314f) :octocat:
-  fix(evidencecontroller.php): updates added which prevent user from accessing the link to the file [`9a54638`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/9a5463826543c2ebd59a7870813be513c64ea15f) :octocat:
-  refactor(lecturer and admin roles, updated): user form styling updated [`4c64d50`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/4c64d50d72877c1db3535b4dee2adbe4828201ce) :octocat:
-  fix(evidencecontroller.php): upload configuration placed files in a public space [`68f95dc`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/68f95dc52b8f7708cba9eb7de493ec4403d68a3a) :octocat:
-  updated GH actions [`4950ac3`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/4950ac3d079a217ab2386f1b0b84b1c27335b975) :octocat:
-  fix(evidencecontroller.php + notecontroller): controllers updated to debug upload errors [`ffc946b`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/ffc946b48c68eb031c594bb2d87c4f8ac6c7c4b5) :octocat:
-  Database config updated to current version [`2a71751`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/2a7175140f7b976caad0860da0fc870de6844834) :octocat:
-  updated GH actions [`2d126e4`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/2d126e496b1e2785760016ed7373dae190268ac3) :octocat:
-  CI: updated github action triggers [`6043b33`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6043b335ae5c007d3fe7eacda13f7b0475a9df46) :octocat:
-  fixed uploads not working again, changed upload title to the orignal filename, changed student evidence profile back to point to the uploaded url, using student_id instead of student_username as student_username broke the route [`568ec52`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/568ec52cbca36fdcf4b347cf2abaa2241f0335b3) :octocat:
-  removed link from upload form, model, and migration. added url to the evidence model, upload should work now [`08f12ab`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/08f12abf11461cfb5defd8c2acdbc3819b54a8cb) :octocat:
-  CI: Corrected formatting issue GH action scripts [`8f14065`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8f14065d615de95e7a72b6f8f69095a458e037cc) :octocat:
-  Update resources/views/pages/notes.blade.php [`32d83bc`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/32d83bc2215a97c9f72396fd3ccc4bfa0fe7a6bf) :octocat:
-  CI: updated github action triggers [`a02129f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a02129fc84805e9b8fd30833fa9528515a353373) :octocat:
-  updated test GH action scripts [`04437dd`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/04437dddcf5ab86d1261e2b63b9a7e342871bb83) :octocat:
-  added correct credentials to .env [`893c13a`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/893c13a1af2b15d628b54f6c0ad96f593ab94d05) :octocat:
-  debugging node installation - dusk action script [`b31ba95`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b31ba95c434e2a7ece74c5afd0dd26be768c5e7e) :octocat:
-  debugging node installation - dusk action script [`7f532dd`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7f532dd353b38e809b8f592bbc679947a8e1ad3a) :octocat:
-  debugging dusk test action - migration error [`474de46`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/474de463d1bebe7d7e1d76140b60b4fa6e914194) :octocat:
-  debugging node installation - dusk action script [`149ebf1`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/149ebf1aa1b99b4ba228e00b98c64bf2e42f6be3) :octocat:
-  Update .github/workflows/production-http-check.yml [`e7fc6ea`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/e7fc6eab4fcedafd76b5bed865fe23c9e3c3c6db) :octocat:
-  debugging node installation - dusk action script [`64f462b`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/64f462b4cfc788bce2ca3be441a2b5de835940fe) :octocat:
-  Merge development into github-action-updates [`b4f6dbe`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b4f6dbe2c154d4f74cbde3c9dc18859c507ebce2) :octocat:
-  Update .github/workflows/test-http-check.yml [`8c6ae28`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8c6ae28192586268c5b48c78cef8a32c4bccec44) :octocat:
-  Merge pull request #200 sprint-4-qa-admin-links [`c5216a2`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c5216a2a3251302c1f9a699275a60c008d2706b6) :octocat:
-  Merge pull request #198 sprint-4-rename-papers-to-courses-frontend [`3554836`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/3554836d61677f7c06d46a4301944e26aa1ddd26) :octocat:
-  Merge pull request #212 sprint-4-admin-panel-deployment-fixes [`fb7f702`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/fb7f70273b1f9ac0fbbe4f282d7fde9e1e2ebfa3) :octocat:
-  Update .gitignore [`6ff26e7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6ff26e7638ec387e1cfdd1878f7324117ffb7c44) :octocat:
-  deleted images from public [`bbfabb0`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/bbfabb0a82a631fbb2072b5a16eff34343786374) :octocat:
-  Merge pull request #196 sprint-4-student-update-form [`eccd89b`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/eccd89bd3ba4e7f15729c75d6e587262f3aefe74) :octocat:
-  updated cohort form + table layout [`25ddf4b`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/25ddf4bb7ae9c918ea9c71ee7c80978867079076) :octocat:
-  Added id checks for users paper and cohort paper. So a lecturer can only see the students and can only create students for the paper they are apart of [`5a611b1`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/5a611b15eeca8441b17160bd51e0a623fb2566f8) :octocat:
-  added checks so a lecturer can only see their students when making a note and evidence, also can only make cohorts if they teach that paper [`f4843c8`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/f4843c888c94c37dc467eb5908742322fb5a77d4) :octocat:
-  created new migration file to add url to db, url field is now unique, filepath set to required [`e73c7a7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/e73c7a7c05d222cb191572ab8f09d0df7e49b914) :octocat:
-  Updated student note form layout [`989adc7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/989adc779fb4d92c33b35904f1b311b81ad2ab19) :octocat:
-  Merge pull request sprint-4-auto-changelog [`54fd9ef`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/54fd9efa460757207ad58f55920b127dda2954fc) :octocat:
-  Merge pull request #193 sprint-4-evidence-backup [`9bf7cbe`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/9bf7cbe0688d6db68f7fc5141033c598b0353b23) :octocat:
-  revert(composer.json and lock files): previous commits did not fix issues arising on github test [`3550d4d`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/3550d4d303453961dd962f35a0a0f39c16d2f3f9) :octocat:
-  fix(composer.lock): dusk test suite errors occuring during composer package install [`4c90cae`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/4c90caead758f9108a9c166a489b737b42302e81) :octocat:
-  fix(package-lock.json): errors still occuring in github dusk action [`6f9c503`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6f9c503a10f2aa296049e9423b9d7acc7268abc3) :octocat:
-  updated evidence upload form layout #127 [`95afca8`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/95afca895d65c01d3d943b9f142f9062acd4885c) :octocat:
-  fix(package-lock.json): fix added to file, corrected merge conflict error [`f229576`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/f229576be68c7d432a9037ae63513fcbb6555820) :octocat:
-  Fix: Student Search Function completed #77 [`63a09a0`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/63a09a048da53189e4b10cb7140debee594cb294) :octocat:
-  updated evidence model, appends shortened upload title [`6cbe928`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6cbe928210ee8ff1c07f1d7cfdc0c9473f539bc6) :octocat:
-  update to student evidence form #127 [`9c9a67d`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/9c9a67d86c87e64bd98d795d5ad46547e4580078) :octocat:
-  changed references of papers to courses on the frontend, changed some styles, added back button to student view and fixed issue with viewing student info due to variable naming [`331efc7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/331efc770aac266a043f581f54317c69a38d6c22) :octocat:
-  updated student profile buttons [`20e95ae`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/20e95aeac6e5de24b72bd85aed542058695e3f0e) :octocat:
-  updated student profile buttons [`d3c48d9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/d3c48d951032e8bc278ec2a93612e13b9e1ddecd) :octocat:
-  updated student profile page layout [`0a22d39`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0a22d3910705004e3b57b5534955785b19a10d4d) :octocat:
-  removed previous project JS student search scripts [`43343dc`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/43343dce9b235431ba935df8c1f821c563db4948) :octocat:
-  feature: student search added back in on the homepage [`b35de9a`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b35de9a576a6dacd75d361a451e7f02dcce0ae0d) :octocat:
-  Added smoke tests for each of the four admin panel links [`873fd50`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/873fd501c055b8b6634c191d2f4d4333cc88ee96) :octocat:
-  added url field to the 'evidence' migration. Can now retireve objects uploaded to aws, having issues with s3 permissions though. [`324ed89`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/324ed898639563b763391b505f14754ec7e5d2e7) :octocat:
-  Student search now has radio buttons, search options [`b04a90c`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b04a90c5ca32232fca07059cd9e7f9a09bc68003) :octocat:
-  fixed access denied with the uploads [`b687343`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b6873439f132eee2157efc807c08740936ed6e0a) :octocat:
-  Added a line Manage users test [`f70f16a`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/f70f16af5901b93b7c967d0cbb8adcaa3f39eafb) :octocat:
-  fix(dusk-test-action): updated action with new command to run HTTPS inplace of SSH [`c967177`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c9671777f3ad6bbb7b8d33b921eff793117f888d) :octocat:
-  fix(laravel-dusk-testing action): github dusk test action error fixes [`b0a7e46`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b0a7e46f4d690d9d1daad21db8220797d2602215) :octocat:
-  fix(pr-reminder.yml): updated action time trigger [`435f55a`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/435f55af07771d8901e4fdd175c66d8e44c76957) :octocat:
-  Update scripts/production_file_backup.sh [`dff4c89`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/dff4c890c6f4d62fd9aba1ba38c4f3f2e2b3694a) :octocat:
-  fix(delete-old-workflows action): updated action to adjust to UTC time used for github actions [`90a6631`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/90a66316ab2363462f229dbf81ec6bbf4a2edba1) :octocat:
-  fix(package-lock.json): previous change to file added in incompatible package version [`cf1e449`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/cf1e449ab958c7f40568faf223c57a7bd7f8755d) :octocat:
-  Merge pull request #192 sprint-4-prevent-back-history [`7aee354`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7aee35446ec9e0d909bd9c9bb4929abbcf786517) :octocat:
-  docs(commitlog.md + package.json): updated files + added extra changelog commit template [`3aaba86`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/3aaba8647b8aa152fa10eeac2dd8d85fe9d8c0ca) :octocat:
-  docs(commitlog-template.hbs): updates added to commitlog template, updated COMMITLOG.md generated [`05c99f9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/05c99f9d664cc1f3ec1127434f269c0beb10741a) :octocat:
-  chore(package.json and readme.md): commitizen config added to package.json + badge added to readme [`6ef2574`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6ef25740c0758c2f37dcfdf4fbe70c91747fae0d) :octocat:
-  new package added, livewire + alpine js [`908c507`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/908c507bc3174f657cb72608bd7412553ccc8387) :octocat:
-  Started new branch to get dev updates, Re-added test files from old branch, Added changes to student tests to fit new alterations, Added login failed attempts test, Fixed nav logout test, Fixed permission test for evidence [`efa937f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/efa937f94363897f83b61a91069b152e70334c36) :octocat:
-  evidence form update, layout #127 [`67445af`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/67445afea9affbcaca954c98d6abd277cb6b8748) :octocat:
-  CI: removed issue template forms left from sprint 3 [`f2bfba9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/f2bfba948f46f96f95304ad917d6e17f47938116) :octocat:
-  updated evidence form, layout changesthe display of input fields [`dbff55e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/dbff55ef189cf48d7ef7ea345430f6c7313d5782) :octocat:
-  Added some new tests for Notes (Find page, No notes typed, No student name selected), Changed name of an evidence test function [`746a348`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/746a348baef2cd1ab4a21b11b8d0aaa8db876957) :octocat:
-  CI: security action added [`7585f52`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7585f527bc4830a5957df3e4711c9e639ea43343) :octocat:
-  CI: security action added [`265fdbb`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/265fdbbc20efff015270852f7bc3e9f45421a282) :octocat:
-  Re-added create evidence test with file attachment from storage folder, Gitignore edited to allow testupload file to be present in the repo [`ea1889f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/ea1889f5cb6b0bf1154b84fdc68644de1cf4cff4) :octocat:
-  script will now delete backups that are older than 7 days [`c4f2903`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c4f2903f4eaf046320b326a039fab2714dfa00be) :octocat:
-  Removed pending status action [`f1db190`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/f1db190f123cd3e9464e03c4a63f9c72ae2e8615) :octocat:
-  outputted script actions to log file [`8017e3c`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8017e3caebd3a76522fbb93d38293e5864dbd1fa) :octocat:
-  addition of pull request reminder action [`9eb9145`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/9eb9145d4de851d816b3d252012fe6494bf5aa21) :octocat:
-  student evidence controller updated, validation was blocking upload [`de3246d`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/de3246d74c1aa1af79ec0aef35d9fb48d3ed8858) :octocat:
-  Fixed bugs with student selection in notes blade, Dropdown select only, Temp fix of last student in dropdown being default [`45adc38`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/45adc382ae177af7afe98b1c184efc4e873711b7) :octocat:
-  CI: added PHP security scanner to action [`4f41eda`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/4f41eda959ad6d3ec861f109e76f776d39219123) :octocat:
-  CI: added PHP security scanner to action [`28448c5`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/28448c5331dd7467ec8dac6a1f39a537c1878b3b) :octocat:
-  evidence form updated,broken file path fixed [`9f11de6`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/9f11de6c05be8ac164541862c7591cefa826438a) :octocat:
-  downloaded amazon cli on VM and tested script command to download s3 bucket [`e7e3780`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/e7e3780edbeda5ae1a0d1c4a3e613404d52d76c2) :octocat:
-  CI: Updated action triggers [`d473ea7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/d473ea7d2344c81d073a42d01d745bfa1d626a2c) :octocat:
-  Adjusting path for upload test - attempt to make it work locally and in actions [`47c04a4`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/47c04a49ca17006cdcda99cb29fb32d012c4e9c8) :octocat:
-  CI: Updated action triggers [`0153318`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0153318586211c1feba7367b2d47f8ac6562c40b) :octocat:
-  Further adjustment to attach path in evidence test. Now using base_path() and full path from root [`4e6ae1c`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/4e6ae1c1fbd0ee539c838150108aeebcdc45b426) :octocat:
-  CI: made security test run for pull requests [`fb08a26`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/fb08a26d573481d14fbb0af7a7c3284ca1595982) :octocat:
-  CI: made security test run for pull requests [`96c5597`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/96c559739f92958e4c093fcb71d798261c76791b) :octocat:
-  small change on line #18 hasn't been tracked [`7417dc9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7417dc9533a5422bc8626172d076c9bdf9b0a280) :octocat:
-  chore(package.json script change): reverted the .git config change added previously [`baf05e3`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/baf05e384988ad9dc6a4341ba16809cd1061cd4c) :octocat:
-  Changed attach file path to use __DIR__ to find current dir [`31b20c2`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/31b20c24a124b50671ac8d2632d078fa2b2cc5d4) :octocat:
-  Editing and removing .gitignore files attempting to retain test file in storage-app-public-testing [`acefb1a`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/acefb1ab9718966ef24418d87c74e51ef2dbfb48) :octocat:
-  Merge pull request #188 dependabot/npm_and_yarn/axios-0.21.2 [`1f7675e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/1f7675ea6e52631630f1beb45169859421a9e170) :octocat:
-  Sprint-4-GitHub-Action-Updates [`7c5a844`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7c5a844bd034989efa2cdea6cf5a6204a40e68bf) :octocat:
-  changelog added to package.json, root directory [`d7e0b98`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/d7e0b98d4b3adb887b8ad6d63b119299cd1b4a73) :octocat:
-  setting up s3 credentials in .env [`6f4f1a0`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6f4f1a098c58bf298ce63b20799ed79c054799d3) :octocat:
-  file upload works, now working on trying to retrieve uploaded file off aws s3, will need to alter the evidence migration later down the line [`27a1965`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/27a1965db0d146d242ccca5e40a2c1827151f353) :octocat:
-  installed dependancies for aws S3, if composer breaks investigate this commit. I used 'composer require league/fylsystem-aws-s3 ~1.0 -w' [`769810b`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/769810b00b50b477e00b852cde1751b0cd1d4978) :octocat:
-  updated github actions [`7ec2951`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7ec2951e5291ccf29804d6d721c1d9ae2e7f9b3b) :octocat:
-  updated student form, controller to handle errors #138 [`b68c87d`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b68c87d2931a656970814ea4782579cb07ba2003) :octocat:
-  updated student/note controller, note form #84 [`8e0e5d9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8e0e5d99abf506b06a2a2f4bd97cb15a4724ac8e) :octocat:
-  updated evidence migration,with description field #85 [`40bd81a`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/40bd81a2412b64a32f0ae9323e422d0ab24eb5f3) :octocat:
-  updated student page, form, profile, controller #138 [`6dfa716`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6dfa716a8fe6bf0f6dcf6ef5786672fc64ba7656) :octocat:
-  added perms checks on views, changed users table size [`0524481`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0524481ddab048af1c69f6578ea0a8cff587d835) :octocat:
-  Removed regular role from perms seeder, added assigning of roles when assigning papers to users, added role checks for admin pages [`7b2b384`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7b2b38424024f89687110366990e0ca67141624a) :octocat:
-  updated changelog + template - added icons to headings [`ee93e1e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/ee93e1e1539493197963b65e56a22bea3409d9a7) :octocat:
-  updated evidence controller, student profile evidence delete button #85 #127 #181 #160 [`933d04d`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/933d04db13387a0923ae09b949dc2750c0e87dbb) :octocat:
-  created seeder to add studio roles + script [`4c08da9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/4c08da965e1187f3c151641796f6325b663ecae3) :octocat:
-  created seeder to add studio roles [`f3924d3`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/f3924d3038f11ab1530d8c16cc56827a7fdd677a) :octocat:
-  updated changelog config + template [`8c338ff`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8c338ffdb260f0fafb3881a166048ea552cd6cfd) :octocat:
-  added a middleware that will stop the site from going back to the last viewed page after a user has logged out [`248d33e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/248d33eb0aebdfd3df0a1f8e1c2568544e83108a) :octocat:
-  created student edit form component [`222c0f6`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/222c0f68b2d9f7e66f93ad47149679cf280949e8) :octocat:
-  added student status attribute to model, new migration #139 [`a217dd0`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a217dd04e959d4aeaf2ce751d16f9940af656973) :octocat:
-  fixed evidence upload as it wasnt working [`13fd9af`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/13fd9afcd42b2275ba67e21c255c8aeca307d4a2) :octocat:
-  Removed pending status action [`8d0e650`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8d0e6507195d58c18ea5080c7061f267cbd71c3d) :octocat:
-  addition of pull request reminder action [`53ec962`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/53ec9626e2771b99491bb53f7c3bacc3f0ee09ed) :octocat:
-  Bump axios from 0.21.1 to 0.21.2 [`3cdd3a5`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/3cdd3a560c95bd4274af0a0492ff69743d360982) :octocat:
-  Another attempt to find a path that works locally and in actions. Using realpath('.') to find root [`f9b7f50`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/f9b7f503b723d0f13a9687dadf2bbc56b8bc282f) :octocat:
-  Merge pull request #184 sprint-4-student-update-form [`ff9ca43`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/ff9ca4321c9ef639d46426a41f055f49b69d87f4) :octocat:
-  updated note controller with delete method called from student profile #138 #84 #160 [`a35c698`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a35c6982b0043c5c8d76c85af437393bb2800616) :octocat:
-  updated student controller validation rules #138 [`79b87be`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/79b87be7c9f6baa4400156a30314f92723d25813) :octocat:
-  updatediption input field to form #85 [`172d6ec`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/172d6ecad12ab53e5515ae4944d56440fa68cdaa) :octocat:
-  Update database/migrations/2021_09_19_041212_update_field_names_in_evidence_table.php [`b8ea489`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b8ea489f1a3b3140c886b2d21cf2bb95f19a4a0a) :octocat:
-  Merge pull request #178 evidence-upload-fix - Sprint 4 [`973e849`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/973e849eb11e7edddf2b784e42c9cce174939f69) :octocat:
-  Update app/Http/Controllers/EvidenceController.php [`034b8c1`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/034b8c1e40c2f9a4fa3e67f23921bdb49fb19e5c) :octocat:
-  added a option tag so it doesnt start on a student [`1334846`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/13348461df6537aaef6baa6056969fceb0ecbac1) :octocat:
## [v1.1.1-beta](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/compare/v1.0.0...v1.1.1-beta) - :calendar:2021-09-13
Sprint 3 deployment fix
### Merged :heavy_check_mark:
- Sprint 3 Deployment Fix [`#161`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/161) :octocat:
- Sprint 3 permissions [`#159`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/159) :octocat:
- Sprint 3 qa students evidence [`#145`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/145) :octocat:
- Sprint 2 backuup migration fix [`#125`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/125) :octocat:
- Sprint 2 backuup migration fix [`#124`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/124) :octocat:
- Admin layouts [`#122`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/122) :octocat:
- Sprint 2 GitHub Deployment Actions #104 [`#121`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/121) :octocat:
- Student Controller, Model and Migration [`#106`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/106) :octocat:
- Sprint 2 qa cohort [`#119`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/119) :octocat:
- Fix for Issue #87 [`#89`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/89) :octocat:
- Sprint 1 merge error fixes [`#80`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/80) :octocat:
- Laravel Automated Test Action [`#57`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/57) :octocat:
- Student Profile Link  [`#64`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/64) :octocat:
- Sprint 1 student view test [`#63`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/63) :octocat:
- Sprint 1 navbar test [`#67`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/67) :octocat:
- Sprint 1 Login fix/features and js moved to seperate files [`#56`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/56) :octocat:
### Fixed :heavy_check_mark:
- Merge sprint-3-deployment-fix #164 [`#164`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/issues/164) :octocat:
### Commits :heavy_check_mark:

-  Merge pull request #168 /sprint-3-deployment-fix [`67ab830`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/67ab8308d04f1a6a6587f41aaa5f9a8876d36f21) :octocat:
-  Attempt dependancy clean up with files from staging [`aa76452`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/aa764525e688badbd39116fcd55503f26729ec5e) :octocat:
-  Updated student form, added drop down to seperate component [`9d0cdea`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/9d0cdeae491a260074d465cc4f8e6987b569f2ec) :octocat:
-  updated composer, moved dev dependencies to developement [`8fa0ce7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8fa0ce727cc43f746bc36095997f797dbe3dad30) :octocat:
-  Added the ability to create roles and permissions. You cannot edit them or delete them [`bf94357`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/bf943575db4cad134aa5601d790850502825270a) :octocat:
-  updated student/cohort select, now pulling data from cohort [`541cf48`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/541cf488d6249e2f76c0de3400a5f9a433513584) :octocat:
-  correction added to the composer lock, json files [`5df067c`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/5df067ce6c67193de33f833f06cc0b23db8d5123) :octocat:
-  Replaced dusk.local env file [`7300a19`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7300a196e822696c24077a3c78426772c875d172) :octocat:
-  Commented out some problematic tests to were failing due to bugs on the site [`b4abdcb`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b4abdcb9326df3b990be280f8603b6cf4e546e79) :octocat:
-  update to route, nav files to include dashboard deactivation [`09cc3c0`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/09cc3c0e6bc2933ebc8eacad17b13a42cd76cc7a) :octocat:
-  removed migration causing error, new version available on staging branch [`9e91c90`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/9e91c90fddbf14437303ea3de48fab5b408fe069) :octocat:
-  Removed role check [`c82e30f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c82e30f0a19275efc8d6b101d6f73c337ec59954) :octocat:
-  configuration changes added which enable deployments to install automatically [`635a0f6`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/635a0f639722b2e5bcd24bd6a69a802a8d37a75e) :octocat:
-  changed seeder to create user in perms file and assign user to super-admin role [`0b19ccc`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0b19ccc497caef286adbec2879289f3896369c02) :octocat:
-  update web route and route service provider [`0ccdfad`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0ccdfadcd15ce96b93f53acee5eaa09c30d3fbc4) :octocat:
-  Changed models to check for proper foreign keys [`43d641f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/43d641f2064346537c82577384ac9a463e937f74) :octocat:
-  correction added to node package file [`8738b7d`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8738b7d471301cac6ff6861c15c3a919d1e82b38) :octocat:
-  added back some styles that were removed [`00e9cd3`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/00e9cd37da581fa76da48eb5ee0878584d802b56) :octocat:
-  removed automatic seeder [`57bc21c`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/57bc21c36124b2856e32ad911d42cd9f3e8d4060) :octocat:
-  updated dusk test suite  [`6eb7d94`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6eb7d9467737cd8621b4b4bb8868be45f79a10d4) :octocat:
-  updated deploy script with seeder function call [`8414f59`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8414f59b839ed14a515778d6cb62f32521bfa6c1) :octocat:
-  updated node packages [`27ecad1`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/27ecad1f9da21472a9146834d98468a8cbf0e45d) :octocat:
-  fix added to cohort_id assignment when creating student [`825e2e0`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/825e2e04cb318fc1807880260087943128d971d2) :octocat:
-  removed duplicate  `use` controller line [`858c73b`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/858c73ba6069bf97a1430fa8d229330bdbda42a2) :octocat:
-  Merge pull request #167/sprint-3-deployment-fix [`00bdcf4`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/00bdcf471a88ac0c42485d35edc8f7015a51e360) :octocat:
-  changed table check in models to be user_papers [`82796a5`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/82796a530bbd86c3bc0ff8ff4f70cfc13110f97e) :octocat:
-  updated student list [`06ae301`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/06ae3013fe7b782d2d3ebe605d43c817ea2b58a2) :octocat:
-  changed the cohort and paper column to show correct info [`141d45e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/141d45eb4b329ec6f2f34969ac4e6dd3202b4bfa) :octocat:
-  merge commit conflict fixes [`b4fbb34`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b4fbb34dc6b072f3c4969e0e4a8f4f948c6806bc) :octocat:
-  changed user creation in seeder [`5c9ee09`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/5c9ee09882fdb16a801ee0c07ec0ec0c67a98a92) :octocat:
-  updated student list [`a866d87`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a866d876179a8d99e6804a516519854dbcc003d5) :octocat:
-  updated student list table properties, ones used unavailable and causing errors [`2fd3076`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/2fd30765f9c72ad6ae312758dfcc7c03cbe49759) :octocat:
-  added missed semicolon [`a36de03`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a36de032f1c137c3787f587c78c687d627870343) :octocat:
-  added the paper controller into web route file [`7423c37`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7423c37e6320a13a774df72fc8389aea42f2bb25) :octocat:
-  removed duplicate route on line 36 [`15728c2`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/15728c2761c3a4b2011d2f41eeee48e292af0d4b) :octocat:
-  added home route [`0d0408c`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0d0408c9ca1e29e676ae966a91dfc4cd340f5793) :octocat:
-  pushing changes to files to fix conflicts [`94bdb04`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/94bdb0477491df779ebab7985a2eebab259092e8) :octocat:
-  updated node package npm version [`b84b806`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b84b806e9b92ae60727a7c0668b6b8d18913348c) :octocat:
-  updated node package npm version [`a9d29b9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a9d29b9e374c4bee8a8abd98707737324a95e12e) :octocat:
-  Changes to each test function to include user creation, some issues with test fails due to routing errors [`fad33e2`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/fad33e2420a2fc2d4f3d4a57158cc4bc06773ea4) :octocat:
-  updated node package npm version [`36f3ca0`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/36f3ca03291eb888f04cad93d35c90f545d4c7e8) :octocat:
-  updated packages for node and composer [`82d96b7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/82d96b7a9999d2c03761f44870524b133bc28ab5) :octocat:
-  Fixes added to the web route file which was causing errors [`aa3edff`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/aa3edff249ad71d563a76823cfcc4e12638a22e5) :octocat:
-  started working on permissions and roles, created seeder to add these [`ce680e4`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/ce680e46e58bd531f797cea94560b1ce150aa9d2) :octocat:
-  Re-adding missing file for testupload, Changing tests for new routes, Change to button press selector [`1718283`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/171828308a9a8e59c0d5e771f6482c04e1640d4e) :octocat:
-  Tweaked student names in dropdown for evidence view, Commented test files, Added dusk attach( ) test for file uploads [`cd067ed`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/cd067ed0c26a6a616402427e8d037c1297dfab71) :octocat:
-  fix package-lock version [`4242660`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/42426608404a62823afe179c56fa8f8ea55af10d) :octocat:
-  Added user creation to each test method, Added refreshDatabase trait to tests, Error with user_papers table migration [`820abd7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/820abd7655b98ee2849eeddebe37188adef18373) :octocat:
-  changed the style of the table in users and changed some styles of buttons, added perm check in student form [`28d6174`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/28d617483b5be1a2c0c53793b5e3e6d3b1424a7c) :octocat:
-  Added id and dusk tags to inputs on evidence blade, Added createstudent method in evident test, Added simple create evidence test [`3a481e7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/3a481e7bd68962c62bb8a5a0af580fe437ef1b74) :octocat:
-  Removed createadminuser function from test files as it is apparently causing automated tests to fail [`d0858fd`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/d0858fd4074c4245d03a303c69c490c2a7c9bc01) :octocat:
-  completed roles and perms seeder and added a role check to the admin panel, changed a few things with user creation to compensate for the adding rfof roles [`1d58f13`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/1d58f13bc2a3ef08bbe6b7e4a592578c9776f465) :octocat:
-  added permission checks to students, notes, cohorts and evidence, and updated table css wherever it was [`7f966f2`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7f966f21feb2c5e643c28a8d7b4d1742b90e6c0e) :octocat:
-  Removed some use statements and commented out lines [`0138567`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/013856756f95a534e2ecaa7e292e327cd16ab333) :octocat:
-  added cohorts select for student and updated a few models, select removing a html tag below it for some reason [`1483e26`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/1483e260f5e73d65f60ae7fd3c55c2e9243fb0b9) :octocat:
-  Update tests/Browser/EvidenceTest.php [`a7a944d`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a7a944d6efe1c7d2e08cc3e0b2d766032d9c780c) :octocat:
-  Update tests/Browser/EvidenceTest.php [`17fc258`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/17fc25834a201c07ebde2efda7dc04c5b50c4307) :octocat:
-  Update tests/Browser/StudentsTest.php [`0b1aed3`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0b1aed3f0ee88eba752fbe7b8c1ec5b672e72961) :octocat:
-  Update tests/Browser/EvidenceTest.php [`0aaf414`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0aaf414c3eda7d38882b970ee355d88b3863b2d4) :octocat:
-  Update tests/Browser/StudentsTest.php [`7254f51`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7254f512c8104b327e6e5605983455f1c0ac6c73) :octocat:
-  Update tests/Browser/CohortViewTest.php [`6b7e60f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6b7e60f8f5a9c2a90d0e6361997cad8ec24bcf38) :octocat:
-  Update tests/Browser/LoginTest.php [`9eab1b7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/9eab1b7ed89fac15dd65d45743ba7d8c79d52f9d) :octocat:
-  Update tests/Browser/EvidenceTest.php [`3281d7e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/3281d7eaea7b733eb984e0cced8da846b7a2d5ea) :octocat:
-  Update tests/Browser/CohortViewTest.php [`28eb11f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/28eb11fb7e1cc3dfdf6ec9ff86c90777f2a33d96) :octocat:
-  Update tests/Browser/EvidenceTest.php [`e221e25`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/e221e25e72485e2764925ddec7d7e68fb1f87936) :octocat:
-  Update tests/Browser/EvidenceTest.php [`a87ae45`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a87ae45321e49d29f902f2c53b5b9ff352eca5af) :octocat:
-  Update composer.json [`c29f73a`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c29f73a4b9c0dfa48539f75d41b483916b196121) :octocat:
-  Update tests/Browser/StudentViewTest.php [`2c463a8`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/2c463a826874469d781b76aee6c26c9bb5a69c7c) :octocat:
-  Update tests/Browser/StudentsTest.php [`4d3fe11`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/4d3fe11834695936d3cd0c5bc5c2f596bc6cea1a) :octocat:
-  Update branch with changes from staging [`0787dcf`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0787dcf6dbe2f113bbf2baf8b36dbd0cb342f282) :octocat:
-  Merge sprint-3-github-dusk-action #144 [`2b0843a`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/2b0843a169edbc00762d3388cb5cd006b608a87c) :octocat:
-  fixed merge conflict [`bcb6a9e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/bcb6a9e271082dca5cc768e0ca9332949e2d38be) :octocat:
-  Updated composer lock and json, moved dev dependencies to production [`c483d24`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c483d24dd72bef1dc461f5ee259d91f4206d8354) :octocat:
-  updated github dusk test action [`2814a50`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/2814a50c3638fbacb3357181297f14691de72846) :octocat:
-  Tweaked student names in dropdown for evidence view, Commented test files, Added dusk attach( ) test for file uploads [`783e2b2`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/783e2b2a5c54c2e954241b8f73e0711c2f28a0b2) :octocat:
-  Added user creation to each test method, Added refreshDatabase trait to tests, Error with user_papers table migration [`7c92d17`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7c92d171ef67adf04348fe7b3c54a57adb54f6df) :octocat:
-  updated dusk tests that were returning errors #131 [`3af2ed8`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/3af2ed876412c40f6710878235d29d86da2b6589) :octocat:
-  Fixed tests to work with new site links, buttons. Removed some non-applicable tests [`b2984e9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b2984e9842ed2b50dacd8cbe66d375c8b26ea8fb) :octocat:
-  Added branch for students, evidence tests. Made test files. Added first basic test methods [`523a979`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/523a979b37b8fc8e32f4c5d3d2f19b9b8fece8be) :octocat:
-  added Note controller, transferred methods #5 [`0df7a29`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0df7a29b1ca7164c76018be7cdf13f843896e8a9) :octocat:
-  removed copied action [`aed8bba`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/aed8bba1a7f0ba5b653034ee498ab254a81be969) :octocat:
-  Updated evidence controller with methods transferred #5 [`2f6da6e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/2f6da6eff14915be66eda40c3a2ce6d1e5050942) :octocat:
-  updated navigation tests so these work on github [`1430edb`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/1430edbe12fc02ddc320bfe7a8d03c046a5b0b0b) :octocat:
-  updated dusk tests so that these log in correctly #131 [`ebafdf7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/ebafdf77660d1a5f64460acc828f9adb7b799366) :octocat:
-  last corrections to tests for dusk github action #131 [`fb516d8`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/fb516d84a10bd40074dd4f6bba6eb9d03ea26fb1) :octocat:
-  debugging the nav logout button [`e796315`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/e796315ce0aea7d44733d3ed6b772d86be18778f) :octocat:
-  completed the navbar fix [`43221d8`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/43221d8655723233e08bff4d18c6180d779030d7) :octocat:
-  updated student test [`34eb7c2`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/34eb7c2359c18c116e922868874410c3939403ef) :octocat:
-  Update tests/Browser/EvidenceTest.php [`fe3d22d`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/fe3d22dc76726bcd7e65305d8f8325025fcdc36d) :octocat:
-  updated navbar test, required a change in the nav template [`b825f83`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/b825f83f4e3c6cba294242b63539f1185fa05c76) :octocat:
-  debugging php artisan dusk command #131 [`c6cad91`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c6cad91bbf7acd513e0749cf4f960c4494ec76b0) :octocat:
-  updated auto assign action and readme [`6abfeaa`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6abfeaaf9d56c42ac3887fae732004e6a0c9a751) :octocat:
-  correction made to dusk env app name, causing errors [`78c8f36`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/78c8f36feb7e7886e6ff02339902b7a5731be461) :octocat:
-  Migration name change, working on tests [`2336f5b`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/2336f5b3285108b4adc92f5129b744895f581d33) :octocat:
-  updated database config, env files for dusk testing #131 [`3a1cdca`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/3a1cdcaf8bb0493866a66a5bf7232e14e3cc0b06) :octocat:
-  Update tests/Browser/EvidenceTest.php [`40c91f2`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/40c91f240605412b044ec8ac64e96fbb8ed93368) :octocat:
-  updated action, remove composer flags causing errors [`c94f673`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c94f673fbca55de6ab893c0e45b21e50ee8e5f0e) :octocat:
-  new action to clear old workflow runs from the repo [`389ee6a`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/389ee6a00f81a7ea07ddd6200c9048e519e174e1) :octocat:
-  removed database migration line from cohort test #131 [`01b4651`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/01b46517ff7f021e59682b76fc7a045b7b9a2bbd) :octocat:
-  Update tests/Browser/EvidenceTest.php [`c5b4d08`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c5b4d0891aa1c5a097ee2c40f2a6a997eacd4856) :octocat:
-  Update tests/Browser/StudentsTest.php [`90b626f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/90b626f935138f145e9ddcf1742d59473456ae8b) :octocat:
-  Added last minute change to migration file name [`df257f1`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/df257f1792d91c50383e4ffdc9eef9c14b80587b) :octocat:
-  Update tests/Browser/EvidenceTest.php [`d4ac468`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/d4ac46849d370568da7de8022ce3bf7b0f19b8e2) :octocat:
-  Update tests/Browser/EvidenceTest.php [`7a23be2`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7a23be28d4de0309272ed1f2ec5c56105164379c) :octocat:
-  Update tests/Browser/EvidenceTest.php [`3641198`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/3641198f2c6c78e3e8fb7ddc31dabb6b7e89907a) :octocat:
-  Update tests/Browser/EvidenceTest.php [`c2b7b41`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c2b7b41f49f727ad0dda9bb180f62153d5294e47) :octocat:
-  Merge #141 sprint-3-update-homepage [`6d71884`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6d7188455d40e9c22e4732d01484acb3c4c25dfb) :octocat:
-  added php artisan dusk command back into action #131 [`96e2aa3`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/96e2aa390fcb6c38132cac5cf9dd902a3b1e6ef0) :octocat:
-  Merge pull request #134 [`7cac8e9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/7cac8e91f826b7f59d3e3b1d568aa0ace0f30e6c) :octocat:
-  Update to dusk action #131 [`8f0707f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8f0707f48a94f337df0431702c05fbb32721589c) :octocat:
-  Revert "Resolved Merge Conflicts" [`6806509`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6806509f31affcab0117e76f565ddb1d77386685) :octocat:
-  updated dusk actions, correcting errors in config [`410b899`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/410b899eb6f27704873b9c50d12446194bedb4ad) :octocat:
-  Routes updated to use resource controllers #19 [`29a83d5`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/29a83d53387a2bcb16a653525d9e6229cf46655f) :octocat:
-  added crud for papers, currently have a problem with edit and delete as it sends an empty object [`2d68a52`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/2d68a52e801e9c3b20f8ab3ce7f9f4ef0cbc704c) :octocat:
-  Correct to dusk github action and css added [`0fef47a`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0fef47a8c66dce99e60e29d265f33646160ac0e4) :octocat:
-  Fixed tests to work with new site links, buttons. Removed some non-applicable tests [`8cb5e1c`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8cb5e1c8dfe20ab93fda5c9dbf1c8e7243851110) :octocat:
-  added function to the cohort view test [`0da3412`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0da3412e014e37829276cb83abd80e37293eb61e) :octocat:
-  Added branch for students, evidence tests. Made test files. Added first basic test methods [`873daed`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/873daed7b270bca01637d65c814aefa649a030c7) :octocat:
-  added a pivot table for papers and users so I can store multiple papers for a user [`4f63a2e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/4f63a2eea1eb263cddf0d198cd3065b5719319f7) :octocat:
-  Added id and dusk tags to inputs on evidence blade, Added createstudent method in evident test, Added simple create evidence test [`87afe37`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/87afe37ccb8fe42124509f0a27fb282da46472c1) :octocat:
-  Updated Dashboard as per #137 ticket [`451b704`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/451b704392c7ed9d7dc848b3bbabbaa658f73cac) :octocat:
-  Update README.md [`469ec31`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/469ec316e7eb9def3be5c9e3d3a87e5a0b93a20c) :octocat:
-  Now have fully working crud for papers [`559a6af`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/559a6afa650527e1b6e2ec3a9880b64e7acbe084) :octocat:
-  added admin panel to nav bar and it'll only appear for admin users, removed ability to update admin status to self if logged in [`cbc1e5b`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/cbc1e5b37e5adb725f96c958e40fa65580d687b1) :octocat:
-  changed to multi select list box for selecting papers [`5b43c07`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/5b43c0740288ea2548cd58fbe0fba815270c5849) :octocat:
-  removed unused routes from the api route #19 [`8eacdd9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/8eacdd9a75264253fff811d48f81f1d1c40e42e1) :octocat:
-  updated github dusk action #131 [`f9acef7`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/f9acef7b69d2da927514c323602ef854d56f691a) :octocat:
-  Commented out blade stuff  [`fbb92b3`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/fbb92b346c39b8632b0b7ca530226bca49577e8a) :octocat:
-  Update index.blade.php [`c5edc67`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/c5edc676dd6c45cfe9b158020dec737f271db35a) :octocat:
-  Update PaperController.php [`4d8bef0`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/4d8bef03f1f90dbc14d1649a0c9df099c644b822) :octocat:
-  Admin can assign multiple papers to a lecturer now through the edit button. These can be changed through the same way. Deleteing a user also removes there data from the pivot table [`725c44e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/725c44e86d1952d737ff627f554a92a18615bdfe) :octocat:
-  Update resources/views/components/student-form.blade.php [`39612e1`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/39612e11841e43a89eddb6443805cea3ed811aab) :octocat:
-  correction to database seeder file-conflict merge error [`981f04e`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/981f04e96752f27204ef69174a770b9c31779f1d) :octocat:
-  Update tests/Browser/EvidenceTest.php [`bd60b85`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/bd60b85b5cfcc20d2d35ad17183b3d6336416488) :octocat:
-  Update tests/Browser/EvidenceTest.php [`32c1ecd`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/32c1ecd183edb987e8dc3abbe1ba9f463b1031dd) :octocat:
-  Update routes/web.php [`a9f3295`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a9f329555e878354ee0b416f7c01308bd8a8cde3) :octocat:
-  Update resources/views/papers/index.blade.php [`df3a3ba`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/df3a3ba53e0a2ce569b2b1396d63e047ff27b1a3) :octocat:
-  Update database/migrations/2021_08_28_024531_create_users_papers_table.php [`0dc5edf`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0dc5edfd1229660e73ff05308ab2877fb9f9a972) :octocat:
-  Update database/migrations/2021_08_28_024531_create_users_papers_table.php [`eaffe63`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/eaffe6383ff293b8e0d6d997c65194268d45269a) :octocat:
-  Update database/migrations/2021_08_28_024531_create_users_papers_table.php [`dfde4de`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/dfde4deb22ed9ec6926259723fee04bcb379627d) :octocat:
-  added a couple of code comments [`f5a597c`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/f5a597cd0b25e2ef3c06871bd7dca0a9ab320c6b) :octocat:
-  Update resources/views/components/student-form.blade.php [`6c397ac`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/6c397acd7bc66d6a3cf261e99835c04000a3226c) :octocat:
-  Resolved Merge Conflicts [`93722a8`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/93722a849cd7ef3eede09a5e5821368f4dda62a3) :octocat:
-  Resolved merge conflicts in readme and composer.lock [`dbae7c0`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/dbae7c093746acd00203925ca1ce7196b5c79a66) :octocat:
-  Update README.md [`a804d56`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/a804d56953e36027b5370ebdb610a2d30e7f82d5) :octocat:
## v1.0.0 - :calendar:2021-08-24
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
### Merged :heavy_check_mark:
- Sprint 2 Completion [`#126`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/126) :octocat:
- Sprint 1 - Deployment Request [`#86`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/86) :octocat:
- Readme changes [`#75`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/pull/75) :octocat:
### Commits :heavy_check_mark:

-  Initial commit [`0ebd78f`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/0ebd78f93b8ce66288f2ad0b9419804849ed4c12) :octocat:
-  updated composer to latest version [`e050c94`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/e050c9415ca05dd69b825238c839a4ea78670d5c) :octocat:
-  Update README.md [`f3572a9`](https://github.com/BIT-Studio-4/team-project-2021-s2-team-delta/commit/f3572a9eebaf86c6296be1511f2023cd6faf854d) :octocat:
---
