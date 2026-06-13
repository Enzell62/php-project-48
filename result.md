2026-06-07T07:20:48.7205841Z Current runner version: '2.334.0'
2026-06-07T07:20:48.7231544Z ##[group]Runner Image Provisioner
2026-06-07T07:20:48.7232436Z Hosted Compute Agent
2026-06-07T07:20:48.7233153Z Version: 20260520.533
2026-06-07T07:20:48.7234318Z Commit: 189110e25284a9812c124fd27b339e2fb4f2f9db
2026-06-07T07:20:48.7235087Z Build Date: 2026-05-20T17:44:04Z
2026-06-07T07:20:48.7235881Z Worker ID: {0e29f039-42d1-4982-9457-32919c838287}
2026-06-07T07:20:48.7236609Z Azure Region: westus
2026-06-07T07:20:48.7237320Z ##[endgroup]
2026-06-07T07:20:48.7238833Z ##[group]Operating System
2026-06-07T07:20:48.7239481Z Ubuntu
2026-06-07T07:20:48.7240105Z 24.04.4
2026-06-07T07:20:48.7240631Z LTS
2026-06-07T07:20:48.7241186Z ##[endgroup]
2026-06-07T07:20:48.7241807Z ##[group]Runner Image
2026-06-07T07:20:48.7242440Z Image: ubuntu-24.04
2026-06-07T07:20:48.7243075Z Version: 20260525.161.1
2026-06-07T07:20:48.7244881Z Included Software: https://github.com/actions/runner-images/blob/ubuntu24/20260525.161/images/ubuntu/Ubuntu2404-Readme.md
2026-06-07T07:20:48.7246577Z Image Release: https://github.com/actions/runner-images/releases/tag/ubuntu24%2F20260525.161
2026-06-07T07:20:48.7247558Z ##[endgroup]
2026-06-07T07:20:48.7248810Z ##[group]GITHUB_TOKEN Permissions
2026-06-07T07:20:48.7251014Z Contents: read
2026-06-07T07:20:48.7251779Z Metadata: read
2026-06-07T07:20:48.7252374Z Packages: read
2026-06-07T07:20:48.7252986Z ##[endgroup]
2026-06-07T07:20:48.7255348Z Secret source: Actions
2026-06-07T07:20:48.7256195Z Prepare workflow directory
2026-06-07T07:20:48.7590884Z Prepare all required actions
2026-06-07T07:20:48.7628981Z Getting action download info
2026-06-07T07:20:49.2290371Z Download action repository 'actions/checkout@v4' (SHA:34e114876b0b11c390a56381ad16ebd13914f8d5)
2026-06-07T07:20:49.3449820Z Download action repository 'hexlet/project-action@release' (SHA:cc61766bf9da94f00e25f82cf80acb8012d2db17)
2026-06-07T07:20:50.3656756Z Complete job name: build
2026-06-07T07:20:50.4417802Z ##[group]Run actions/checkout@v4
2026-06-07T07:20:50.4418806Z with:
2026-06-07T07:20:50.4419368Z   repository: Enzell62/php-project-48
2026-06-07T07:20:50.4424564Z   token: ***
2026-06-07T07:20:50.4425081Z   ssh-strict: true
2026-06-07T07:20:50.4425583Z   ssh-user: git
2026-06-07T07:20:50.4426222Z   persist-credentials: true
2026-06-07T07:20:50.4426779Z   clean: true
2026-06-07T07:20:50.4427285Z   sparse-checkout-cone-mode: true
2026-06-07T07:20:50.4427866Z   fetch-depth: 1
2026-06-07T07:20:50.4428353Z   fetch-tags: false
2026-06-07T07:20:50.4428854Z   show-progress: true
2026-06-07T07:20:50.4429457Z   lfs: false
2026-06-07T07:20:50.4430325Z   submodules: false
2026-06-07T07:20:50.4431153Z   set-safe-directory: true
2026-06-07T07:20:50.4432418Z ##[endgroup]
2026-06-07T07:20:50.5571132Z Syncing repository: Enzell62/php-project-48
2026-06-07T07:20:50.5574475Z ##[group]Getting Git version info
2026-06-07T07:20:50.5575510Z Working directory is '/home/runner/work/php-project-48/php-project-48'
2026-06-07T07:20:50.5576734Z [command]/usr/bin/git version
2026-06-07T07:20:50.5659722Z git version 2.54.0
2026-06-07T07:20:50.5695187Z ##[endgroup]
2026-06-07T07:20:50.5703964Z Temporarily overriding HOME='/home/runner/work/_temp/71da7e53-7274-4b53-97f3-e42ea94e9c1d' before making global git config changes
2026-06-07T07:20:50.5707128Z Adding repository directory to the temporary git global config as a safe directory
2026-06-07T07:20:50.5720563Z [command]/usr/bin/git config --global --add safe.directory /home/runner/work/php-project-48/php-project-48
2026-06-07T07:20:50.5774235Z Deleting the contents of '/home/runner/work/php-project-48/php-project-48'
2026-06-07T07:20:50.5777508Z ##[group]Initializing the repository
2026-06-07T07:20:50.5782990Z [command]/usr/bin/git init /home/runner/work/php-project-48/php-project-48
2026-06-07T07:20:50.5891155Z hint: Using 'master' as the name for the initial branch. This default branch name
2026-06-07T07:20:50.5892705Z hint: will change to "main" in Git 3.0. To configure the initial branch name
2026-06-07T07:20:50.5894446Z hint: to use in all of your new repositories, which will suppress this warning,
2026-06-07T07:20:50.5895792Z hint: call:
2026-06-07T07:20:50.5896827Z hint:
2026-06-07T07:20:50.5898078Z hint: 	git config --global init.defaultBranch <name>
2026-06-07T07:20:50.5898905Z hint:
2026-06-07T07:20:50.5899711Z hint: Names commonly chosen instead of 'master' are 'main', 'trunk' and
2026-06-07T07:20:50.5900896Z hint: 'development'. The just-created branch can be renamed via this command:
2026-06-07T07:20:50.5901818Z hint:
2026-06-07T07:20:50.5902774Z hint: 	git branch -m <name>
2026-06-07T07:20:50.5903793Z hint:
2026-06-07T07:20:50.5904781Z hint: Disable this message with "git config set advice.defaultBranchName false"
2026-06-07T07:20:50.5906164Z Initialized empty Git repository in /home/runner/work/php-project-48/php-project-48/.git/
2026-06-07T07:20:50.5909005Z [command]/usr/bin/git remote add origin https://github.com/Enzell62/php-project-48
2026-06-07T07:20:50.5958279Z ##[endgroup]
2026-06-07T07:20:50.5959384Z ##[group]Disabling automatic garbage collection
2026-06-07T07:20:50.5960295Z [command]/usr/bin/git config --local gc.auto 0
2026-06-07T07:20:50.5990150Z ##[endgroup]
2026-06-07T07:20:50.5992051Z ##[group]Setting up auth
2026-06-07T07:20:50.5998252Z [command]/usr/bin/git config --local --name-only --get-regexp core\.sshCommand
2026-06-07T07:20:50.6034565Z [command]/usr/bin/git submodule foreach --recursive sh -c "git config --local --name-only --get-regexp 'core\.sshCommand' && git config --local --unset-all 'core.sshCommand' || :"
2026-06-07T07:20:50.6390925Z [command]/usr/bin/git config --local --name-only --get-regexp http\.https\:\/\/github\.com\/\.extraheader
2026-06-07T07:20:50.6423328Z [command]/usr/bin/git submodule foreach --recursive sh -c "git config --local --name-only --get-regexp 'http\.https\:\/\/github\.com\/\.extraheader' && git config --local --unset-all 'http.https://github.com/.extraheader' || :"
2026-06-07T07:20:50.6644321Z [command]/usr/bin/git config --local --name-only --get-regexp ^includeIf\.gitdir:
2026-06-07T07:20:50.6675608Z [command]/usr/bin/git submodule foreach --recursive git config --local --show-origin --name-only --get-regexp remote.origin.url
2026-06-07T07:20:50.6907864Z [command]/usr/bin/git config --local http.https://github.com/.extraheader AUTHORIZATION: basic ***
2026-06-07T07:20:50.6948518Z ##[endgroup]
2026-06-07T07:20:50.6949739Z ##[group]Fetching the repository
2026-06-07T07:20:50.6960567Z [command]/usr/bin/git -c protocol.version=2 fetch --no-tags --prune --no-recurse-submodules --depth=1 origin +a2bbdd88f89c9a163563ffadf5fc46684c435dbb:refs/tags/vBuild825343
2026-06-07T07:20:51.0831330Z From https://github.com/Enzell62/php-project-48
2026-06-07T07:20:51.0832936Z  * [new ref]         a2bbdd88f89c9a163563ffadf5fc46684c435dbb -> vBuild825343
2026-06-07T07:20:51.0871378Z ##[endgroup]
2026-06-07T07:20:51.0872422Z ##[group]Determining the checkout info
2026-06-07T07:20:51.0874285Z ##[endgroup]
2026-06-07T07:20:51.0879447Z [command]/usr/bin/git sparse-checkout disable
2026-06-07T07:20:51.0923897Z [command]/usr/bin/git config --local --unset-all extensions.worktreeConfig
2026-06-07T07:20:51.0949522Z ##[group]Checking out the ref
2026-06-07T07:20:51.0953043Z [command]/usr/bin/git checkout --progress --force refs/tags/vBuild825343
2026-06-07T07:20:51.1027863Z Note: switching to 'refs/tags/vBuild825343'.
2026-06-07T07:20:51.1028919Z 
2026-06-07T07:20:51.1030084Z You are in 'detached HEAD' state. You can look around, make experimental
2026-06-07T07:20:51.1031857Z changes and commit them, and you can discard any commits you make in this
2026-06-07T07:20:51.1033141Z state without impacting any branches by switching back to a branch.
2026-06-07T07:20:51.1034312Z 
2026-06-07T07:20:51.1034782Z If you want to create a new branch to retain commits you create, you may
2026-06-07T07:20:51.1035744Z do so (now or later) by using -c with the switch command. Example:
2026-06-07T07:20:51.1036675Z 
2026-06-07T07:20:51.1037157Z   git switch -c <new-branch-name>
2026-06-07T07:20:51.1037622Z 
2026-06-07T07:20:51.1037908Z Or undo this operation with:
2026-06-07T07:20:51.1038484Z 
2026-06-07T07:20:51.1038729Z   git switch -
2026-06-07T07:20:51.1039104Z 
2026-06-07T07:20:51.1039633Z Turn off this advice by setting config variable advice.detachedHead to false
2026-06-07T07:20:51.1040278Z 
2026-06-07T07:20:51.1040576Z HEAD is now at a2bbdd8 add planeFormatter
2026-06-07T07:20:51.1042421Z ##[endgroup]
2026-06-07T07:20:51.1075499Z [command]/usr/bin/git log -1 --format=%H
2026-06-07T07:20:51.1097430Z a2bbdd88f89c9a163563ffadf5fc46684c435dbb
2026-06-07T07:20:51.1324926Z ##[group]Run hexlet/project-action@release
2026-06-07T07:20:51.1325779Z with:
2026-06-07T07:20:51.1326391Z   hexlet-id: ***
2026-06-07T07:20:51.1327098Z   verbose: false
2026-06-07T07:20:51.1327679Z   mount-path: /var/tmp
2026-06-07T07:20:51.1328274Z ##[endgroup]
2026-06-07T07:20:51.7496530Z ##[group]Preparing
2026-06-07T07:21:10.3433836Z ##[endgroup]
2026-06-07T07:21:10.3447589Z [command]/usr/bin/docker compose run app make setup
2026-06-07T07:21:10.7565816Z  Network source_default  Creating
2026-06-07T07:21:10.7911974Z  Network source_default  Created
2026-06-07T07:21:10.8610233Z #1 [internal] load local bake definitions
2026-06-07T07:21:10.9780171Z #1 reading from stdin 323B done
2026-06-07T07:21:10.9781243Z #1 DONE 0.0s
2026-06-07T07:21:11.1235790Z 
2026-06-07T07:21:11.1239541Z #2 [internal] load build definition from Dockerfile
2026-06-07T07:21:11.1240804Z #2 transferring dockerfile: 451B done
2026-06-07T07:21:11.1241557Z #2 DONE 0.0s
2026-06-07T07:21:11.1241962Z 
2026-06-07T07:21:11.1242606Z #3 [internal] load metadata for docker.io/library/php:8.3-cli
2026-06-07T07:21:11.1243841Z #3 DONE 0.1s
2026-06-07T07:21:11.1244430Z 
2026-06-07T07:21:11.1244958Z #4 [internal] load metadata for docker.io/library/composer:2
2026-06-07T07:21:11.1834821Z #4 DONE 0.1s
2026-06-07T07:21:11.1836152Z 
2026-06-07T07:21:11.1836824Z #5 [internal] load .dockerignore
2026-06-07T07:21:11.1837747Z #5 transferring context: 72B done
2026-06-07T07:21:11.1838870Z #5 DONE 0.0s
2026-06-07T07:21:11.1839243Z 
2026-06-07T07:21:11.1840058Z #6 [stage-0 1/6] FROM docker.io/library/php:8.3-cli@sha256:861deb86c83e92f416ebdb1a1d15c957474d2f39e112c7edea4446070afd8055
2026-06-07T07:21:11.1840982Z #6 DONE 0.0s
2026-06-07T07:21:11.1841150Z 
2026-06-07T07:21:11.1841892Z #7 FROM docker.io/library/composer:2@sha256:41959f55087549989efcdfe953977b64e98e07ca0d7532d7e4b7fe1a90cc4159
2026-06-07T07:21:11.1842981Z #7 DONE 0.0s
2026-06-07T07:21:11.1843732Z 
2026-06-07T07:21:11.1843976Z #8 [internal] load build context
2026-06-07T07:21:11.1844522Z #8 transferring context: 16.73kB 0.0s done
2026-06-07T07:21:11.1844977Z #8 DONE 0.0s
2026-06-07T07:21:11.1845190Z 
2026-06-07T07:21:11.1845377Z #9 [stage-0 5/6] RUN mkdir /project/code
2026-06-07T07:21:11.1846015Z #9 CACHED
2026-06-07T07:21:11.1846377Z 
2026-06-07T07:21:11.1847209Z #10 [stage-0 2/6] RUN apt-get update     && apt-get install -yqq --no-install-recommends         git         zip         unzip         make         ruby     && rm -rf /var/lib/apt/lists/*
2026-06-07T07:21:11.1944475Z #10 CACHED
2026-06-07T07:21:11.1944839Z 
2026-06-07T07:21:11.1945325Z #11 [stage-0 3/6] COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer
2026-06-07T07:21:11.1946088Z #11 CACHED
2026-06-07T07:21:11.1946356Z 
2026-06-07T07:21:11.1946544Z #12 [stage-0 4/6] WORKDIR /project
2026-06-07T07:21:11.1947005Z #12 CACHED
2026-06-07T07:21:11.1947203Z 
2026-06-07T07:21:11.1947382Z #13 [stage-0 6/6] COPY . .
2026-06-07T07:21:11.1947796Z #13 CACHED
2026-06-07T07:21:11.1947994Z 
2026-06-07T07:21:11.1948173Z #14 exporting to image
2026-06-07T07:21:11.1948590Z #14 exporting layers done
2026-06-07T07:21:11.1949421Z #14 writing image sha256:86e61d9fef3f32aaaffeedccfb9b504a0af11b05cef7997c44582b2ea19d25c0 done
2026-06-07T07:21:11.1950434Z #14 naming to docker.io/library/source-app done
2026-06-07T07:21:11.1950790Z #14 DONE 0.0s
2026-06-07T07:21:11.1951045Z 
2026-06-07T07:21:11.1951212Z #15 resolving provenance for metadata file
2026-06-07T07:21:11.1951513Z #15 DONE 0.0s
2026-06-07T07:21:11.3240628Z composer install
2026-06-07T07:21:11.4124373Z No composer.lock file present. Updating dependencies to latest instead of installing from lock file. See https://getcomposer.org/install for more information.
2026-06-07T07:21:11.4125964Z Loading composer repositories with package information
2026-06-07T07:21:11.4232503Z The repository at "/project/code/" does not have the correct ownership and git refuses to use it:
2026-06-07T07:21:11.4233590Z 
2026-06-07T07:21:11.4234376Z fatal: detected dubious ownership in repository at '/project/code'
2026-06-07T07:21:11.4234882Z To add an exception for this directory, call:
2026-06-07T07:21:11.4235127Z 
2026-06-07T07:21:11.4235310Z git config --global --add safe.directory /project/code
2026-06-07T07:21:11.4235563Z 
2026-06-07T07:21:12.3616801Z Updating dependencies
2026-06-07T07:21:12.3688746Z Lock file operations: 36 installs, 0 updates, 0 removals
2026-06-07T07:21:12.3689650Z   - Locking docopt/docopt (1.0.6)
2026-06-07T07:21:12.3690160Z   - Locking funct/funct (1.6.0)
2026-06-07T07:21:12.3690693Z   - Locking hexlet/code (dev-main ca8b05b)
2026-06-07T07:21:12.3691305Z   - Locking mikehaertl/php-shellcommand (1.7.0)
2026-06-07T07:21:12.3691893Z   - Locking myclabs/deep-copy (1.13.4)
2026-06-07T07:21:12.3692421Z   - Locking nikic/php-parser (v5.7.0)
2026-06-07T07:21:12.3692942Z   - Locking phar-io/manifest (2.0.4)
2026-06-07T07:21:12.3694376Z   - Locking phar-io/version (3.2.1)
2026-06-07T07:21:12.3694971Z   - Locking phpstan/extension-installer (1.4.3)
2026-06-07T07:21:12.3695873Z   - Locking phpstan/phpstan (2.2.2)
2026-06-07T07:21:12.3701923Z   - Locking phpstan/phpstan-strict-rules (2.0.11)
2026-06-07T07:21:12.3703033Z   - Locking phpunit/php-code-coverage (12.5.7)
2026-06-07T07:21:12.3704200Z   - Locking phpunit/php-file-iterator (6.0.1)
2026-06-07T07:21:12.3705047Z   - Locking phpunit/php-invoker (6.0.0)
2026-06-07T07:21:12.3705812Z   - Locking phpunit/php-text-template (5.0.0)
2026-06-07T07:21:12.3706549Z   - Locking phpunit/php-timer (8.0.0)
2026-06-07T07:21:12.3707259Z   - Locking phpunit/phpunit (12.5.29)
2026-06-07T07:21:12.3708107Z   - Locking sebastian/cli-parser (4.2.1)
2026-06-07T07:21:12.3708943Z   - Locking sebastian/comparator (7.1.8)
2026-06-07T07:21:12.3709755Z   - Locking sebastian/complexity (5.0.0)
2026-06-07T07:21:12.3710618Z   - Locking sebastian/diff (7.0.0)
2026-06-07T07:21:12.3711440Z   - Locking sebastian/environment (8.1.2)
2026-06-07T07:21:12.3712262Z   - Locking sebastian/exporter (7.0.3)
2026-06-07T07:21:12.3713178Z   - Locking sebastian/global-state (8.0.3)
2026-06-07T07:21:12.3714291Z   - Locking sebastian/lines-of-code (4.0.1)
2026-06-07T07:21:12.3715151Z   - Locking sebastian/object-enumerator (7.0.0)
2026-06-07T07:21:12.3716084Z   - Locking sebastian/object-reflector (5.0.0)
2026-06-07T07:21:12.3716901Z   - Locking sebastian/recursion-context (7.0.1)
2026-06-07T07:21:12.3717685Z   - Locking sebastian/type (6.0.4)
2026-06-07T07:21:12.3718410Z   - Locking sebastian/version (6.0.0)
2026-06-07T07:21:12.3719263Z   - Locking squizlabs/php_codesniffer (4.0.1)
2026-06-07T07:21:12.3720138Z   - Locking staabm/side-effects-detector (1.0.5)
2026-06-07T07:21:12.3721093Z   - Locking symfony/deprecation-contracts (v3.7.0)
2026-06-07T07:21:12.3721949Z   - Locking symfony/polyfill-ctype (v1.37.0)
2026-06-07T07:21:12.3722777Z   - Locking symfony/yaml (v7.4.13)
2026-06-07T07:21:12.3723782Z   - Locking theseer/tokenizer (2.0.1)
2026-06-07T07:21:12.3724573Z Writing lock file
2026-06-07T07:21:12.3725313Z Installing dependencies from lock file (including require-dev)
2026-06-07T07:21:12.3736584Z Package operations: 36 installs, 0 updates, 0 removals
2026-06-07T07:21:12.3761173Z   - Downloading phpstan/phpstan (2.2.2)
2026-06-07T07:21:12.3766179Z   - Downloading phpstan/extension-installer (1.4.3)
2026-06-07T07:21:12.3770150Z   - Downloading symfony/polyfill-ctype (v1.37.0)
2026-06-07T07:21:12.3774480Z   - Downloading symfony/deprecation-contracts (v3.7.0)
2026-06-07T07:21:12.3777516Z   - Downloading symfony/yaml (v7.4.13)
2026-06-07T07:21:12.3782560Z   - Downloading funct/funct (1.6.0)
2026-06-07T07:21:12.3786714Z   - Downloading docopt/docopt (1.0.6)
2026-06-07T07:21:12.3791917Z   - Downloading mikehaertl/php-shellcommand (1.7.0)
2026-06-07T07:21:12.3795286Z   - Downloading phpstan/phpstan-strict-rules (2.0.11)
2026-06-07T07:21:12.3799699Z   - Downloading staabm/side-effects-detector (1.0.5)
2026-06-07T07:21:12.3803917Z   - Downloading sebastian/version (6.0.0)
2026-06-07T07:21:12.3807701Z   - Downloading sebastian/type (6.0.4)
2026-06-07T07:21:12.3814869Z   - Downloading sebastian/recursion-context (7.0.1)
2026-06-07T07:21:12.3819190Z   - Downloading sebastian/object-reflector (5.0.0)
2026-06-07T07:21:12.3821854Z   - Downloading sebastian/object-enumerator (7.0.0)
2026-06-07T07:21:12.3822660Z   - Downloading sebastian/global-state (8.0.3)
2026-06-07T07:21:12.3823870Z   - Downloading sebastian/exporter (7.0.3)
2026-06-07T07:21:12.3827633Z   - Downloading sebastian/environment (8.1.2)
2026-06-07T07:21:12.3829590Z   - Downloading sebastian/diff (7.0.0)
2026-06-07T07:21:12.3830168Z   - Downloading sebastian/comparator (7.1.8)
2026-06-07T07:21:12.3831103Z   - Downloading sebastian/cli-parser (4.2.1)
2026-06-07T07:21:12.3834164Z   - Downloading phpunit/php-timer (8.0.0)
2026-06-07T07:21:12.3845995Z   - Downloading phpunit/php-text-template (5.0.0)
2026-06-07T07:21:12.3853724Z   - Downloading phpunit/php-invoker (6.0.0)
2026-06-07T07:21:12.3857356Z   - Downloading phpunit/php-file-iterator (6.0.1)
2026-06-07T07:21:12.3857980Z   - Downloading theseer/tokenizer (2.0.1)
2026-06-07T07:21:12.3858534Z   - Downloading nikic/php-parser (v5.7.0)
2026-06-07T07:21:12.3859131Z   - Downloading sebastian/lines-of-code (4.0.1)
2026-06-07T07:21:12.3859748Z   - Downloading sebastian/complexity (5.0.0)
2026-06-07T07:21:12.3862416Z   - Downloading phpunit/php-code-coverage (12.5.7)
2026-06-07T07:21:12.3863176Z   - Downloading phar-io/version (3.2.1)
2026-06-07T07:21:12.3868885Z   - Downloading phar-io/manifest (2.0.4)
2026-06-07T07:21:12.3869601Z   - Downloading myclabs/deep-copy (1.13.4)
2026-06-07T07:21:12.3870147Z   - Downloading phpunit/phpunit (12.5.29)
2026-06-07T07:21:12.3872035Z   - Downloading squizlabs/php_codesniffer (4.0.1)
2026-06-07T07:21:12.8905561Z   0/35 [>---------------------------]   0%
2026-06-07T07:21:13.1018467Z  11/35 [========>-------------------]  31%
2026-06-07T07:21:13.2232014Z  21/35 [================>-----------]  60%
2026-06-07T07:21:13.3360339Z  25/35 [====================>-------]  71%
2026-06-07T07:21:13.4993322Z  32/35 [=========================>--]  91%
2026-06-07T07:21:13.4994254Z  35/35 [============================] 100%
2026-06-07T07:21:13.4999735Z   - Installing phpstan/phpstan (2.2.2): Extracting archive
2026-06-07T07:21:13.6396927Z   - Installing phpstan/extension-installer (1.4.3): Extracting archive
2026-06-07T07:21:13.6458772Z   - Installing symfony/polyfill-ctype (v1.37.0): Extracting archive
2026-06-07T07:21:13.6464715Z   - Installing symfony/deprecation-contracts (v3.7.0): Extracting archive
2026-06-07T07:21:13.6477501Z   - Installing symfony/yaml (v7.4.13): Extracting archive
2026-06-07T07:21:13.6478737Z   - Installing funct/funct (1.6.0): Extracting archive
2026-06-07T07:21:13.6488388Z   - Installing docopt/docopt (1.0.6): Extracting archive
2026-06-07T07:21:13.6558905Z   - Installing hexlet/code (dev-main ca8b05b): Symlinking from ./code
2026-06-07T07:21:13.6569745Z   - Installing mikehaertl/php-shellcommand (1.7.0): Extracting archive
2026-06-07T07:21:13.6579945Z   - Installing phpstan/phpstan-strict-rules (2.0.11): Extracting archive
2026-06-07T07:21:13.6584827Z   - Installing staabm/side-effects-detector (1.0.5): Extracting archive
2026-06-07T07:21:13.6595231Z   - Installing sebastian/version (6.0.0): Extracting archive
2026-06-07T07:21:13.6629730Z   - Installing sebastian/type (6.0.4): Extracting archive
2026-06-07T07:21:13.6639189Z   - Installing sebastian/recursion-context (7.0.1): Extracting archive
2026-06-07T07:21:13.6645001Z   - Installing sebastian/object-reflector (5.0.0): Extracting archive
2026-06-07T07:21:13.6648961Z   - Installing sebastian/object-enumerator (7.0.0): Extracting archive
2026-06-07T07:21:13.6653164Z   - Installing sebastian/global-state (8.0.3): Extracting archive
2026-06-07T07:21:13.6658286Z   - Installing sebastian/exporter (7.0.3): Extracting archive
2026-06-07T07:21:13.6660588Z   - Installing sebastian/environment (8.1.2): Extracting archive
2026-06-07T07:21:13.6664060Z   - Installing sebastian/diff (7.0.0): Extracting archive
2026-06-07T07:21:13.6666722Z   - Installing sebastian/comparator (7.1.8): Extracting archive
2026-06-07T07:21:13.6670047Z   - Installing sebastian/cli-parser (4.2.1): Extracting archive
2026-06-07T07:21:13.6672428Z   - Installing phpunit/php-timer (8.0.0): Extracting archive
2026-06-07T07:21:13.6679256Z   - Installing phpunit/php-text-template (5.0.0): Extracting archive
2026-06-07T07:21:13.6680111Z   - Installing phpunit/php-invoker (6.0.0): Extracting archive
2026-06-07T07:21:13.6682172Z   - Installing phpunit/php-file-iterator (6.0.1): Extracting archive
2026-06-07T07:21:13.6684336Z   - Installing theseer/tokenizer (2.0.1): Extracting archive
2026-06-07T07:21:13.6688062Z   - Installing nikic/php-parser (v5.7.0): Extracting archive
2026-06-07T07:21:13.6689675Z   - Installing sebastian/lines-of-code (4.0.1): Extracting archive
2026-06-07T07:21:13.6693745Z   - Installing sebastian/complexity (5.0.0): Extracting archive
2026-06-07T07:21:13.6696499Z   - Installing phpunit/php-code-coverage (12.5.7): Extracting archive
2026-06-07T07:21:13.6699648Z   - Installing phar-io/version (3.2.1): Extracting archive
2026-06-07T07:21:13.6702581Z   - Installing phar-io/manifest (2.0.4): Extracting archive
2026-06-07T07:21:13.6706595Z   - Installing myclabs/deep-copy (1.13.4): Extracting archive
2026-06-07T07:21:13.6712125Z   - Installing phpunit/phpunit (12.5.29): Extracting archive
2026-06-07T07:21:13.6715074Z   - Installing squizlabs/php_codesniffer (4.0.1): Extracting archive
2026-06-07T07:21:13.7899233Z   0/33 [>---------------------------]   0%
2026-06-07T07:21:13.8960977Z  31/33 [==========================>-]  93%
2026-06-07T07:21:13.8961558Z  33/33 [============================] 100%
2026-06-07T07:21:14.1629151Z 4 package suggestions were added by new dependencies, use `composer suggest` to see details.
2026-06-07T07:21:14.1634153Z Generating autoload files
2026-06-07T07:21:14.3075516Z 28 packages you are using are looking for funding.
2026-06-07T07:21:14.3076085Z Use the `composer fund` command to find out more!
2026-06-07T07:21:14.4263129Z phpstan/extension-installer: Extensions installed
2026-06-07T07:21:14.4264129Z > phpstan/phpstan-strict-rules: installed
2026-06-07T07:21:14.5723901Z [command]/usr/bin/docker compose -f docker-compose.yml up --abort-on-container-exit
2026-06-07T07:21:14.6432525Z time="2026-06-07T07:21:14Z" level=warning msg="Found orphan containers ([source-app-run-62634780ecf7]) for this project. If you removed or renamed this service in your compose file, you can run this command with the --remove-orphans flag to clean it up."
2026-06-07T07:21:14.6438047Z  Container source-app-1  Creating
2026-06-07T07:21:14.6640291Z  Container source-app-1  Created
2026-06-07T07:21:14.6648964Z Attaching to app-1
2026-06-07T07:21:14.7823641Z app-1  | composer exec -v phpunit -- --colors=always --testdox
2026-06-07T07:21:14.8719509Z app-1  | > __exec_command: phpunit '--colors=always' '--testdox'
2026-06-07T07:21:14.9714886Z app-1  | PHPUnit 12.5.29 by Sebastian Bergmann and contributors.
2026-06-07T07:21:14.9715753Z app-1  | 
2026-06-07T07:21:14.9716194Z app-1  | Runtime:       PHP 8.3.31
2026-06-07T07:21:14.9716669Z app-1  | Configuration: /project/phpunit.xml
2026-06-07T07:21:14.9717096Z app-1  | 
2026-06-07T07:21:15.0620142Z app-1  | [31;1mE[0m[31;1mE[0m[31;1mE[0m[31;1mE[0m[31;1mE[0m[31;1mE[0m[31;1mE[0m[31;1mE[0m[31;1mE[0m[31;1mE[0m[31;1mE[0m[31;1mE[0m[31;1mE[0m[31;1mE[0m[31;1mE[0m[31;1mE[0m                                                  16 / 16 (100%)
2026-06-07T07:21:15.0621405Z app-1  | 
2026-06-07T07:21:15.0621724Z app-1  | Time: 00:00.090, Memory: 14.00 MB
2026-06-07T07:21:15.0622120Z app-1  | 
2026-06-07T07:21:15.0622885Z app-1  | [4mCli (Hexlet\Project\tests\Cli)[0m
2026-06-07T07:21:15.0624037Z app-1  | [33m ✘ [0mDefault[2m with [22m[36mjson[2m·[22mfiles[0m
2026-06-07T07:21:15.0624835Z app-1  |    [33m┐[0m
2026-06-07T07:21:15.0642250Z app-1  |    [33m├[0m [43;30mException: sh: 1: gendiff: not found[0m
2026-06-07T07:21:15.0643100Z app-1  |    [33m│[0m
2026-06-07T07:21:15.0644584Z app-1  |    [33m│[0m [2m/[22mproject[2m/[22mtests[2m/[22mCliTest.php[2m:[22m[34m29[0m
2026-06-07T07:21:15.0645819Z app-1  |    [33m┴[0m
2026-06-07T07:21:15.0646356Z app-1  | [33m ✘ [0mDefault[2m with [22m[36myaml[2m·[22mfiles[0m
2026-06-07T07:21:15.0646802Z app-1  |    [33m┐[0m
2026-06-07T07:21:15.0647201Z app-1  |    [33m├[0m [43;30mException: sh: 1: gendiff: not found[0m
2026-06-07T07:21:15.0647613Z app-1  |    [33m│[0m
2026-06-07T07:21:15.0648091Z app-1  |    [33m│[0m [2m/[22mproject[2m/[22mtests[2m/[22mCliTest.php[2m:[22m[34m29[0m
2026-06-07T07:21:15.0648598Z app-1  |    [33m┴[0m
2026-06-07T07:21:15.0649003Z app-1  | [33m ✘ [0mStylish[2m with [22m[36mjson[2m·[22mfiles[0m
2026-06-07T07:21:15.0649404Z app-1  |    [33m┐[0m
2026-06-07T07:21:15.0649773Z app-1  |    [33m├[0m [43;30mException: sh: 1: gendiff: not found[0m
2026-06-07T07:21:15.0650171Z app-1  |    [33m│[0m
2026-06-07T07:21:15.0650632Z app-1  |    [33m│[0m [2m/[22mproject[2m/[22mtests[2m/[22mCliTest.php[2m:[22m[34m45[0m
2026-06-07T07:21:15.0651112Z app-1  |    [33m┴[0m
2026-06-07T07:21:15.0651500Z app-1  | [33m ✘ [0mStylish[2m with [22m[36myaml[2m·[22mfiles[0m
2026-06-07T07:21:15.0651895Z app-1  |    [33m┐[0m
2026-06-07T07:21:15.0652262Z app-1  |    [33m├[0m [43;30mException: sh: 1: gendiff: not found[0m
2026-06-07T07:21:15.0652646Z app-1  |    [33m│[0m
2026-06-07T07:21:15.0653047Z app-1  |    [33m│[0m [2m/[22mproject[2m/[22mtests[2m/[22mCliTest.php[2m:[22m[34m45[0m
2026-06-07T07:21:15.0653636Z app-1  |    [33m┴[0m
2026-06-07T07:21:15.0653982Z app-1  | [33m ✘ [0mPlain[2m with [22m[36mjson[2m·[22mfiles[0m
2026-06-07T07:21:15.0654354Z app-1  |    [33m┐[0m
2026-06-07T07:21:15.0654684Z app-1  |    [33m├[0m [43;30mException: sh: 1: gendiff: not found[0m
2026-06-07T07:21:15.0655030Z app-1  |    [33m│[0m
2026-06-07T07:21:15.0655432Z app-1  |    [33m│[0m [2m/[22mproject[2m/[22mtests[2m/[22mCliTest.php[2m:[22m[34m61[0m
2026-06-07T07:21:15.0655889Z app-1  |    [33m┴[0m
2026-06-07T07:21:15.0656227Z app-1  | [33m ✘ [0mPlain[2m with [22m[36myaml[2m·[22mfiles[0m
2026-06-07T07:21:15.0656574Z app-1  |    [33m┐[0m
2026-06-07T07:21:15.0656910Z app-1  |    [33m├[0m [43;30mException: sh: 1: gendiff: not found[0m
2026-06-07T07:21:15.0657283Z app-1  |    [33m│[0m
2026-06-07T07:21:15.0657709Z app-1  |    [33m│[0m [2m/[22mproject[2m/[22mtests[2m/[22mCliTest.php[2m:[22m[34m61[0m
2026-06-07T07:21:15.0658140Z app-1  |    [33m┴[0m
2026-06-07T07:21:15.0658472Z app-1  | [33m ✘ [0mJson[2m with [22m[36mjson[2m·[22mfiles[0m
2026-06-07T07:21:15.0658833Z app-1  |    [33m┐[0m
2026-06-07T07:21:15.0659384Z app-1  |    [33m├[0m [43;30mException: sh: 1: gendiff: not found[0m
2026-06-07T07:21:15.0660025Z app-1  |    [33m│[0m
2026-06-07T07:21:15.0660784Z app-1  |    [33m│[0m [2m/[22mproject[2m/[22mtests[2m/[22mCliTest.php[2m:[22m[34m76[0m
2026-06-07T07:21:15.0661265Z app-1  |    [33m┴[0m
2026-06-07T07:21:15.0661606Z app-1  | [33m ✘ [0mJson[2m with [22m[36myaml[2m·[22mfiles[0m
2026-06-07T07:21:15.0662152Z app-1  |    [33m┐[0m
2026-06-07T07:21:15.0662868Z app-1  |    [33m├[0m [43;30mException: sh: 1: gendiff: not found[0m
2026-06-07T07:21:15.0663889Z app-1  |    [33m│[0m
2026-06-07T07:21:15.0664504Z app-1  |    [33m│[0m [2m/[22mproject[2m/[22mtests[2m/[22mCliTest.php[2m:[22m[34m76[0m
2026-06-07T07:21:15.0665324Z app-1  |    [33m┴[0m
2026-06-07T07:21:15.0665685Z app-1  | 
2026-06-07T07:21:15.0666168Z app-1  | [4mDiffer (Hexlet\Project\tests\Differ)[0m
2026-06-07T07:21:15.0667021Z app-1  | [33m ✘ [0mDefault[2m with [22m[36mjson[2m·[22mfiles[0m
2026-06-07T07:21:15.0667923Z app-1  |    [33m┐[0m
2026-06-07T07:21:15.0668625Z app-1  |    [33m├[0m [43;30mError: Call to undefined function Differ\Differ\genDiff()[0m
2026-06-07T07:21:15.0669065Z app-1  |    [33m│[0m
2026-06-07T07:21:15.0669509Z app-1  |    [33m│[0m [2m/[22mproject[2m/[22mtests[2m/[22mDifferTest.php[2m:[22m[34m35[0m
2026-06-07T07:21:15.0670050Z app-1  |    [33m┴[0m
2026-06-07T07:21:15.0670664Z app-1  | [33m ✘ [0mDefault[2m with [22m[36myaml[2m·[22mfiles[0m
2026-06-07T07:21:15.0671066Z app-1  |    [33m┐[0m
2026-06-07T07:21:15.0671490Z app-1  |    [33m├[0m [43;30mError: Call to undefined function Differ\Differ\genDiff()[0m
2026-06-07T07:21:15.0671918Z app-1  |    [33m│[0m
2026-06-07T07:21:15.0672341Z app-1  |    [33m│[0m [2m/[22mproject[2m/[22mtests[2m/[22mDifferTest.php[2m:[22m[34m35[0m
2026-06-07T07:21:15.0672773Z app-1  |    [33m┴[0m
2026-06-07T07:21:15.0673107Z app-1  | [33m ✘ [0mStylish[2m with [22m[36mjson[2m·[22mfiles[0m
2026-06-07T07:21:15.0673819Z app-1  |    [33m┐[0m
2026-06-07T07:21:15.0674267Z app-1  |    [33m├[0m [43;30mError: Call to undefined function Differ\Differ\genDiff()[0m
2026-06-07T07:21:15.0674692Z app-1  |    [33m│[0m
2026-06-07T07:21:15.0675123Z app-1  |    [33m│[0m [2m/[22mproject[2m/[22mtests[2m/[22mDifferTest.php[2m:[22m[34m45[0m
2026-06-07T07:21:15.0675567Z app-1  |    [33m┴[0m
2026-06-07T07:21:15.0675915Z app-1  | [33m ✘ [0mStylish[2m with [22m[36myaml[2m·[22mfiles[0m
2026-06-07T07:21:15.0676334Z app-1  |    [33m┐[0m
2026-06-07T07:21:15.0676760Z app-1  |    [33m├[0m [43;30mError: Call to undefined function Differ\Differ\genDiff()[0m
2026-06-07T07:21:15.0677184Z app-1  |    [33m│[0m
2026-06-07T07:21:15.0677606Z app-1  |    [33m│[0m [2m/[22mproject[2m/[22mtests[2m/[22mDifferTest.php[2m:[22m[34m45[0m
2026-06-07T07:21:15.0678037Z app-1  |    [33m┴[0m
2026-06-07T07:21:15.0678410Z app-1  | [33m ✘ [0mPlain[2m with [22m[36mjson[2m·[22mfiles[0m
2026-06-07T07:21:15.0678827Z app-1  |    [33m┐[0m
2026-06-07T07:21:15.0679286Z app-1  |    [33m├[0m [43;30mError: Call to undefined function Differ\Differ\genDiff()[0m
2026-06-07T07:21:15.0679703Z app-1  |    [33m│[0m
2026-06-07T07:21:15.0680120Z app-1  |    [33m│[0m [2m/[22mproject[2m/[22mtests[2m/[22mDifferTest.php[2m:[22m[34m55[0m
2026-06-07T07:21:15.0680569Z app-1  |    [33m┴[0m
2026-06-07T07:21:15.0680913Z app-1  | [33m ✘ [0mPlain[2m with [22m[36myaml[2m·[22mfiles[0m
2026-06-07T07:21:15.0681269Z app-1  |    [33m┐[0m
2026-06-07T07:21:15.0681666Z app-1  |    [33m├[0m [43;30mError: Call to undefined function Differ\Differ\genDiff()[0m
2026-06-07T07:21:15.0682082Z app-1  |    [33m│[0m
2026-06-07T07:21:15.0682528Z app-1  |    [33m│[0m [2m/[22mproject[2m/[22mtests[2m/[22mDifferTest.php[2m:[22m[34m55[0m
2026-06-07T07:21:15.0682967Z app-1  |    [33m┴[0m
2026-06-07T07:21:15.0683299Z app-1  | [33m ✘ [0mJson[2m with [22m[36mjson[2m·[22mfiles[0m
2026-06-07T07:21:15.0683959Z app-1  |    [33m┐[0m
2026-06-07T07:21:15.0684401Z app-1  |    [33m├[0m [43;30mError: Call to undefined function Differ\Differ\genDiff()[0m
2026-06-07T07:21:15.0684831Z app-1  |    [33m│[0m
2026-06-07T07:21:15.0685256Z app-1  |    [33m│[0m [2m/[22mproject[2m/[22mtests[2m/[22mDifferTest.php[2m:[22m[34m66[0m
2026-06-07T07:21:15.0685688Z app-1  |    [33m┴[0m
2026-06-07T07:21:15.0686023Z app-1  | [33m ✘ [0mJson[2m with [22m[36myaml[2m·[22mfiles[0m
2026-06-07T07:21:15.0686367Z app-1  |    [33m┐[0m
2026-06-07T07:21:15.0686768Z app-1  |    [33m├[0m [43;30mError: Call to undefined function Differ\Differ\genDiff()[0m
2026-06-07T07:21:15.0687180Z app-1  |    [33m│[0m
2026-06-07T07:21:15.0687593Z app-1  |    [33m│[0m [2m/[22mproject[2m/[22mtests[2m/[22mDifferTest.php[2m:[22m[34m66[0m
2026-06-07T07:21:15.0688020Z app-1  |    [33m┴[0m
2026-06-07T07:21:15.0688224Z app-1  | 
2026-06-07T07:21:15.0688626Z app-1  | [37;41mERRORS![0m
2026-06-07T07:21:15.0689063Z app-1  | [37;41mTests: 16[0m[37;41m, Assertions: 0[0m[37;41m, Errors: 16[0m[37;41m.[0m
2026-06-07T07:21:15.0689613Z app-1  | Script phpunit handling the __exec_command event returned with error code 2
2026-06-07T07:21:15.0698950Z app-1  | make: *** [Makefile:31: test] Error 2
2026-06-07T07:21:15.1310673Z 
2026-06-07T07:21:15.1311536Z [Kapp-1 exited with code 2
2026-06-07T07:21:15.1312145Z Aborting on container exit...
2026-06-07T07:21:15.1318423Z  Container source-app-1  Stopping
2026-06-07T07:21:15.1322367Z  Container source-app-1  Stopped
2026-06-07T07:21:15.1323087Z 
2026-06-07T07:21:15.1396287Z ##[error]The tests have failed. Examine what they have to say. Inhale deeply. Exhale. Fix the code.
2026-06-07T07:21:15.4701706Z 
2026-06-07T07:21:15.4703003Z file:///home/runner/work/_actions/hexlet/project-action/release/dist/node_modules/@octokit/request/dist-bundle/index.js:149
2026-06-07T07:21:15.4704214Z     return response.arrayBuffer().catch(
2026-06-07T07:21:15.4704722Z ^
2026-06-07T07:21:15.4705186Z Error: The process '/usr/bin/docker' failed with exit code 2
2026-06-07T07:21:15.4706482Z     at ExecState.catch [as _setResult] (file:///home/runner/work/_actions/hexlet/project-action/release/dist/node_modules/@octokit/request/dist-bundle/index.js:149:1)
2026-06-07T07:21:15.4707811Z     at ExecState.catch [as CheckComplete] (file:///home/runner/work/_actions/hexlet/project-action/release/dist/node_modules/@octokit/request/dist-bundle/index.js:149:1)
2026-06-07T07:21:15.4708976Z     at ChildProcess.<anonymous> (file:///home/runner/work/_actions/hexlet/project-action/release/dist/node_modules/@octokit/request/dist-bundle/index.js:149:1)
2026-06-07T07:21:15.4904420Z Post job cleanup.
2026-06-07T07:21:15.6700449Z ##[group]Finish check
2026-06-07T07:21:15.9470046Z ##[endgroup]
2026-06-07T07:21:15.9470802Z ##[group]Upload artifacts
2026-06-07T07:21:15.9471552Z uploadArtifacts: no artifacts directory at /var/tmp/source/tmp/artifacts, skipping
2026-06-07T07:21:15.9472837Z ##[endgroup]
2026-06-07T07:21:15.9473740Z ##[group]Upload test data
2026-06-07T07:21:15.9509389Z Artifact name is valid!
2026-06-07T07:21:15.9509938Z Root directory input is valid!
2026-06-07T07:21:16.2132993Z Uploading artifact: test-data.zip
2026-06-07T07:21:16.2177844Z Beginning upload of artifact content to blob storage
2026-06-07T07:21:16.5324588Z Uploaded bytes 2675
2026-06-07T07:21:16.6082152Z Finished uploading artifact content to blob storage!
2026-06-07T07:21:16.6083292Z SHA256 digest of uploaded artifact is 098ca5803cff655fb665f1099953298bddc46178f6e87fccab73975cf0878f86
2026-06-07T07:21:16.6084617Z Finalizing artifact upload
2026-06-07T07:21:16.9346950Z Artifact test-data successfully finalized. Artifact ID 7461827487
2026-06-07T07:21:16.9348187Z [43m[30mDownload snapshots from Artifacts.[39m[49m
2026-06-07T07:21:16.9349145Z ##[endgroup]
2026-06-07T07:21:16.9500637Z Post job cleanup.
2026-06-07T07:21:17.0507540Z [command]/usr/bin/git version
2026-06-07T07:21:17.0547445Z git version 2.54.0
2026-06-07T07:21:17.0592788Z Temporarily overriding HOME='/home/runner/work/_temp/9a6a5fc7-092c-4fcf-a55f-0d9826c06854' before making global git config changes
2026-06-07T07:21:17.0594054Z Adding repository directory to the temporary git global config as a safe directory
2026-06-07T07:21:17.0599182Z [command]/usr/bin/git config --global --add safe.directory /home/runner/work/php-project-48/php-project-48
2026-06-07T07:21:17.0636730Z [command]/usr/bin/git config --local --name-only --get-regexp core\.sshCommand
2026-06-07T07:21:17.0672769Z [command]/usr/bin/git submodule foreach --recursive sh -c "git config --local --name-only --get-regexp 'core\.sshCommand' && git config --local --unset-all 'core.sshCommand' || :"
2026-06-07T07:21:17.0905058Z [command]/usr/bin/git config --local --name-only --get-regexp http\.https\:\/\/github\.com\/\.extraheader
2026-06-07T07:21:17.0930944Z http.https://github.com/.extraheader
2026-06-07T07:21:17.0944503Z [command]/usr/bin/git config --local --unset-all http.https://github.com/.extraheader
2026-06-07T07:21:17.0977234Z [command]/usr/bin/git submodule foreach --recursive sh -c "git config --local --name-only --get-regexp 'http\.https\:\/\/github\.com\/\.extraheader' && git config --local --unset-all 'http.https://github.com/.extraheader' || :"
2026-06-07T07:21:17.1202837Z [command]/usr/bin/git config --local --name-only --get-regexp ^includeIf\.gitdir:
2026-06-07T07:21:17.1234967Z [command]/usr/bin/git submodule foreach --recursive git config --local --show-origin --name-only --get-regexp remote.origin.url
2026-06-07T07:21:17.1604012Z Cleaning up orphan processes
2026-06-07T07:21:17.1980787Z ##[warning]Node.js 20 actions are deprecated. The following actions are running on Node.js 20 and may not work as expected: actions/checkout@v4. Actions will be forced to run with Node.js 24 by default starting June 16th, 2026. Node.js 20 will be removed from the runner on September 16th, 2026. Please check if updated versions of these actions are available that support Node.js 24. To opt into Node.js 24 now, set the FORCE_JAVASCRIPT_ACTIONS_TO_NODE24=true environment variable on the runner or in your workflow file. Once Node.js 24 becomes the default, you can temporarily opt out by setting ACTIONS_ALLOW_USE_UNSECURE_NODE_VERSION=true. For more information see: https://github.blog/changelog/2025-09-19-deprecation-of-node-20-on-github-actions-runners/
