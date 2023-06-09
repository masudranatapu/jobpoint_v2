<div class="navbar-vertical-container">
        <div class="navbar-vertical-footer-offset">

            <a class="navbar-brand" href="{{ route('admin.dashboard') }}" aria-label="Front">
            <img class="navbar-brand-logo" src="https://www.bangalistatic.com/images/logo.svg" alt="Logo">
            <img class="navbar-brand-logo-mini" src="https://www.bangalistatic.com/images/logo-short.svg" alt="Logo">
            </a>


            <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
            <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
            <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
            </button>


            <div class="navbar-vertical-content">
            <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">

                <div class="nav-item">
                <a class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}" data-placement="left">
                    <i class="bi-house nav-icon"></i>
                    <span class="nav-link-title">Dashboard</span>
                </a>
                </div>

                <span class="dropdown-header mt-4">Main</span>
                <small class="bi-three-dots nav-subtitle-replacer"></small>

                <div class="nav-item">
                <a class="nav-link {{ Route::is('admin.organizations') ? 'active' : '' }}" href="{{ route('admin.organizations') }}" data-placement="left">
                    <i class="bi-building nav-icon"></i>
                    <span class="nav-link-title">Organizations</span>
                </a>
                </div>

                <div class="nav-item">
                <a class="nav-link " href="/admin/jobs/index.html" data-placement="left">
                    <i class="bi-briefcase nav-icon"></i>
                    <span class="nav-link-title">Jobs</span>
                </a>
                </div>

                <div class="nav-item">
                <a class="nav-link " href="/admin/candidates/index.html" data-placement="left">
                    <i class="bi-people nav-icon"></i>
                    <span class="nav-link-title">Candidates</span>
                </a>
                </div>

                <div class="nav-item">
                <a class="nav-link " href="/admin/interviews/index.html" data-placement="left">
                    <i class="bi-person-video nav-icon"></i>
                    <span class="nav-link-title">Interviews</span>
                </a>
                </div>

                <div class="nav-item">
                <a class="nav-link " href="/admin/onboards/index.html" data-placement="left">
                    <i class="bi-person-plus nav-icon"></i>
                    <span class="nav-link-title">OnBoards</span>
                </a>
                </div>

            <div id="navbarMenuUtilities">

                <div class="nav-item">
                <a class="nav-link dropdown-toggle" href="/admin/utilities/index.html" role="button" data-bs-toggle="collapse" data-bs-target="#navbarSubMenuUtilities" aria-expanded="false" aria-controls="navbarSubMenuUtilities">
                    <i class="bi-sliders nav-icon"></i>
                    <span class="nav-link-title">Utilities</span>
                </a>

                <div id="navbarSubMenuUtilities" class="nav-collapse collapse" data-bs-parent="#navbarMenuUtilities">
                    <a class="nav-link" href="/admin/utilities/candidate-archives/index.html">Candidate Archives</a>
                    <a class="nav-link" href="/admin/utilities/industries/index.html">Industries</a>
                    <a class="nav-link" href="/admin/utilities/departments/index.html">Departments</a>
                    <a class="nav-link" href="/admin/utilities/designations/index.html">Designations</a>
                    <a class="nav-link " href="/admin/utilities/job-types/index.html">Job Types</a>
                    <a class="nav-link " href="/admin/utilities/categories/index.html">Categories</a>
                    <a class="nav-link " href="/admin/utilities/skills/index.html">Skills</a>
                    <a class="nav-link " href="/admin/utilities/experience/index.html">Experience</a>                
                    <a class="nav-link " href="/admin/utilities/salary-types/index.html">Salary Types</a>
                    <a class="nav-link " href="/admin/utilities/locations/index.html">Locations</a>
                    <a class="nav-link " href="/admin/utilities/currencies/index.html">Currencies</a>                
                </div>
                </div>

            </div>

                <div class="nav-item">
                <a class="nav-link " href="/admin/report/index.html" data-placement="left">
                    <i class="bi-activity nav-icon"></i>
                    <span class="nav-link-title">Report</span>
                </a>
                </div>

                <span class="dropdown-header mt-4">Setup</span>
                <small class="bi-three-dots nav-subtitle-replacer"></small>

                <div id="navbarSetupMenu">

                <div class="nav-item">
                    <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="collapse" data-bs-target="#navbarSetupMenuSettings" aria-expanded="false" aria-controls="navbarSetupMenuSettings">
                    <i class="bi-gear nav-icon"></i>
                    <span class="nav-link-title">Settings</span>
                    </a>

                    <div id="navbarSetupMenuSettings" class="nav-collapse collapse " data-bs-parent="#navbarSetupMenu">
                    <a class="nav-link " href="./ecommerce.html">General</a>
                    <a class="nav-link " href="./ecommerce-referrals.html">Themes</a>

                    <div id="navbarSetupSubMenuSettingsMenuForms">
    
                        <div class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="collapse" data-bs-target="#navbarSetupSubMenuSettingsSubMenuForms" aria-expanded="false" aria-controls="navbarSetupSubMenuSettingsSubMenuForms">
                            Forms
                        </a>

                        <div id="navbarSetupSubMenuSettingsSubMenuForms" class="nav-collapse collapse " data-bs-parent="#navbarSetupSubMenuSettingsMenuForms">
                            <a class="nav-link " href="./ecommerce-products.html">Application</a>
                            <a class="nav-link " href="./ecommerce-product-details.html">OnBoard</a>
                        </div>
                        </div>

                    </div>

                    <a class="nav-link " href="./ecommerce-referrals.html">Users</a>
                    <a class="nav-link " href="./ecommerce-manage-reviews.html">Roles</a>
                    <a class="nav-link " href="./ecommerce-checkout.html">Pages</a>
                    <a class="nav-link " href="./ecommerce-checkout.html">Notification</a>
                    <a class="nav-link " href="./ecommerce-checkout.html">Email</a>
                    <a class="nav-link " href="./ecommerce-checkout.html">SMS</a>
                    <a class="nav-link " href="./ecommerce-checkout.html">Storage</a>
                    <a class="nav-link " href="./ecommerce-checkout.html">Integrations</a>
                    </div>
                </div>


                </div>


                <span class="dropdown-header mt-4">Miscellaneous</span>
                <small class="bi-three-dots nav-subtitle-replacer"></small>

                <div class="nav-item">
                <a class="nav-link " href="./documentation/index.html" data-placement="left">
                    <i class="bi-box-arrow-up-right nav-icon"></i>
                    <span class="nav-link-title">Front Website</span>
                </a>
                </div>
            </div>

            </div>


            <div class="navbar-vertical-footer">
            <ul class="navbar-vertical-footer-list">
                <li class="navbar-vertical-footer-list-item">

                <div class="dropdown dropup">
                    <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="otherLinksDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                    <i class="bi-info-circle"></i>
                    </button>

                    <div class="dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="otherLinksDropdown">
                    <span class="dropdown-header">Help</span>
                    <a class="dropdown-item" href="#">
                        <i class="bi-journals dropdown-item-icon"></i>
                        <span class="text-truncate" title="Resources &amp; tutorials">Resources &amp; tutorials</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="bi-gift dropdown-item-icon"></i>
                        <span class="text-truncate" title="What's new?">What's new?</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <span class="dropdown-header">Contacts</span>
                    <a class="dropdown-item" href="#">
                        <i class="bi-chat-left-dots dropdown-item-icon"></i>
                        <span class="text-truncate" title="Contact support">Contact support</span>
                    </a>
                    </div>
                </div>

                </li>
            </ul>
            </div>

        </div>
        </div>