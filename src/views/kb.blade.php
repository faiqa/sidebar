

<li>
    <a href="#kms" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
        <i class="fa fa-database navIcon  " aria-hidden="true"></i>
        <span class="navText">Knowledge Base</span>
    </a>
    <ul class="list-unstyled menu-level-2 show" id="kms">
        <li @if($route == "all_folders") {{ 'class=active-submenu' }} @endif>
            <a class="menu" href="/all_folders">
                <!--                            <i class="fa fa-genderless mr-2  " aria-hidden="true"></i> -->
                Folders</a>
        </li>
        <li @if($route == "dashboard") {{ 'class=active-submenu' }} @endif>
            <a class="menu" href="/dashboard">
                <!--                            <i class="fa fa-genderless mr-2  " aria-hidden="true"></i> -->
                Dashboard</a>
        </li>
        <li>
            <a href="#thirdSubmenu" data-toggle="collapse"  class="dropdown-toggle main-menu"
            @if($route == "external_suggestion" || $route == "internal_suggestion" || $route == "folder_suggestion" || $route == "list_page_suggestion" || $route == "faq_review_list")
                {{ 'aria-expanded=true' }}
                @else
                {{ 'aria-expanded=false' }}
                @endif
            >
                @if(getAllSuggestions() == 0)
                    Suggestions
                @else
                    <span class="badge-notification mt-1"
                          data-badge="{{ getAllSuggestions() }}">
                                Suggestions</span>

                @endif
            </a>
            <ul  id="thirdSubmenu" class="list-unstyled menu-level-3
 @if($route == "external_suggestion" || $route == "internal_suggestion" || $route == "folder_suggestion" || $route == "list_page_suggestion" || $route == "faq_review_list") {{ '' }}
            @else {{ 'collapse' }} @endif">
                <li @if($route == "external_suggestion") {{ 'class=active-submenu2' }} @endif>
                    <a class="menu" href="/external_suggestion">
                        @if(getAllCustomerSuggestions() == 0)
                            <span class="ml-4"> External Suggestions</span>
                        @else
                            <span class="badge-notification mt-1 ml-4"
                                  data-badge="{{ getAllCustomerSuggestions() }}">External Suggestions</span>

                        @endif
                    </a>
                </li>
                <li @if($route == "internal_suggestion") {{ 'class=active-submenu2' }} @endif>
                    <a class="menu" href="/internal_suggestion">

                        @if(getAllInternalSuggestions() == 0)
                            <span class="ml-4"> Internal Suggestions </span>
                        @else
                            <span class="badge-notification mt-1 ml-4"
                                  data-badge="{{ getAllInternalSuggestions() }}">Internal Suggestions </span>

                        @endif

                    </a>
                </li>
                <li @if($route == "folder_suggestion") {{ 'class=active-submenu2' }} @endif>
                    <a class="menu" href="/folder_suggestion">
                        @if(getAllFolderSuggestions() == 0)
                            <span class="ml-4"> Folders Suggestion</span>
                        @else
                            <span class="badge-notification mt-1 ml-4"
                                  data-badge="{{ getAllFolderSuggestions() }}">Folder Suggestion </span>

                        @endif

                    </a>
                </li>
                <li @if($route == "list_page_suggestion") {{ 'class=active-submenu2' }} @endif>
                    <a class="menu" href="/list_page_suggestion">
                        @if(getAllPageSuggestions() == 0 )
                            <span class="ml-4"> Page Suggestion</span>
                        @else
                            <span class="badge-notification mt-1 ml-4"
                                  data-badge="{{ getAllPageSuggestions() }}"> Page Reviews </span>

                        @endif
                    </a>
                </li>
                <li @if($route == "faq_review_list") {{ 'class=active-submenu2' }} @endif>
                    <a class="menu" href="/faq_review_list">
                        <span class="ml-4">FAQ Reviews</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#faqSubmenu" data-toggle="collapse"

               @if($route == "external_faq" || $route == "internal_faq"){{ '' }}
               {{ 'aria-expanded=true' }}
               @else
               {{ 'aria-expanded=false' }}
               @endif
               class="dropdown-toggle  main-menu">
                <!--                            <i class="fa fa-genderless mr-2" aria-hidden="true"></i>-->
                FAQs
            </a>
            <ul class="list-unstyled
                        @if($route == "external_faq" || $route == "internal_faq"){{ '' }}
            @else {{ 'collapse' }} @endif"

                id="faqSubmenu">
                <li @if($route == "external_faq") {{ 'class=active-submenu2' }} @endif>
                    <a class="menu" href="/external_faq"> <span class="ml-4"> External FAQs</span></a>
                </li>
                <li @if($route == "internal_faq") {{ 'class=active-submenu2' }} @endif>
                    <a class="menu" href="/internal_faq"> <span class="ml-4"> Internal FAQs</span></a>
                </li>

            </ul>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse"  @if($route == "add_uncategorised" || $route == "show_pages"){{ '' }}
            {{ 'aria-expanded=true' }}
            @else
            {{ 'aria-expanded=false' }}
            @endif class="dropdown-toggle  main-menu">
                <!--                            <i class="fa fa-genderless mr-2  " aria-hidden="true"></i>-->
                Pages
            </a>
            <ul class=" @if($route == "add_uncategorised" || $route == "show_pages")
            @else {{ 'collapse' }} @endif
                list-unstyled" id="pageSubmenu">
                <li @if($route == "add_uncategorised") {{ 'class=active-submenu2' }} @endif>
                    <a class="menu" href="/add_uncategorised"> <span class="ml-4"> Add Page</span></a>
                </li>
                <li @if($route == "show_pages") {{ 'class=active-submenu2' }} @endif>
                    <a class="menu" href="/show_pages"> <span class="ml-4"> All Pages</span></a>
                </li>

            </ul>
        </li>

    </ul>
</li>
