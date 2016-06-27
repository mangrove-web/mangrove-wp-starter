<?php
/*
Template Name: Styleguide
*/
?>

<?php get_header(); ?>

    <div id="content" class="animateIn">

        <div id="main">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

                    <section class="">

                            <div class="flexslider loading">
                              <ul class="slides">
                                <li>
                                  <img src="https://placeholdit.imgix.net/~text?txtsize=117&bg=2196f3&txtclr=000000&txt=1400%C3%97600&w=1400&h=600" />
                                </li>
                                <li>
                                  <img src="https://placeholdit.imgix.net/~text?txtsize=117&bg=e91e63&txtclr=000000&txt=1400%C3%97600&w=1400&h=600" />
                                </li>
                                <li>
                                  <img src="https://placeholdit.imgix.net/~text?txtsize=117&bg=009688&txtclr=000000&txt=1400%C3%97600&w=1400&h=600" />
                                </li>
                              </ul>
                            </div>



                <section class="section animateIn">
                    <h2 class="text-big">Text modifiers</h2>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <h2 class="text-medium text-gray">Default</h2>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor <a href="#" title="in reprehenderit">in reprehenderit</a> in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <h2 class="text-medium text-gray">Gray</h2>
                            <p class="text-gray"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <h2 class="text-medium text-gray">Primary color</h2>
                            <p class="text-primary"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <h2 class="text-medium text-gray">Success color</h2>
                            <p class="text-success"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <h2 class="text-medium text-gray">Error color</h2>
                            <p class="text-error"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <h2 class="text-medium text-gray">Align center</h2>
                            <p class="align-center"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <h2 class="text-medium text-gray">Align right</h2>
                            <p class="align-right"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <h2 class="text-medium text-gray">Uppercase</h2>
                            <p class="text-uppercase"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <h2 class="text-medium text-gray">Line through</h2>
                            <p class="text-line-through"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <h2 class="text-medium text-gray">Italic</h2>
                            <p class="text-italic"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </div>
                    </div>


                </section>


                <section class="section animateIn">
                    <h2 class="text-big">Buttons</h2>
                    <h2 class="text-medium text-gray">Button colors</h2>
                    <div>
                        <button class="button block-mobile">default</button>
                        <button class="button button-primary block-mobile">primary</button>
                        <button class="button button-outlined block-mobile">outlined</button>
                        <button class="button button-secondary block-mobile">secondary</button>
                        <button class="button button-disabled block-mobile">disabled</button>
                        <button class="button button-white block-mobile">white</button>
                        <button class="button button-green block-mobile">green</button>
                        <button class="button button-red block-mobile">red</button>
                        <button class="button button-transparent block-mobile">transparent</button>
                    </div>

                    <h2 class="text-medium text-gray">Buttons with icon</h2>
                    <div>
                        <button class="button block-mobile"><span>Button</span> <i class="fa fa-hand-spock-o"></i></button>
                        <button class="button block-mobile"><i class="fa fa-hand-spock-o"></i> <span>Button</span></button>
                        <span class="block-mobile text-center"><button class="button button-only-icon"><i class="fa fa-thumbs-o-up"></i></button></span>

                    </div>

                    <h2 class="text-medium text-gray">Buttons group</h2>
                    <div class="button-group">
                        <button class="button">Button</button><button class="button">Button</button><button class="button">Button</button>
                    </div>

                    <h2 class="text-medium text-gray">Button sizes</h2>
                    <div>
                        <button class="button button-huge block-mobile">Button huge</button>
                        <button class="button button-big block-mobile">Button big</button>
                        <button class="button block-mobile">Button default</button>
                        <button class="button button-small block-mobile">Button small</button>
                    </div>
                </section>

                <section class="section animateIn">
                    <h2 class="text-big">Typography sizes</h2>

                    <h1>H1</h1>
                    <h1>This is a longer H1</h1>

                    <h2>H2</h2>
                    <h2>This is a longer H2</h2>

                    <h3>H3</h3>
                    <h3>This is a longer H3</h3>

                    <h4>H4</h4>
                    <h4>This is a longer H4</h4>

                    <h5>H5</h5>
                    <h5>This is a longer H5</h5>

                    <h6>H6</h6>
                    <h6>This is a longer H6</h6>

                    <p class="text-huge text-gray">Text huge. Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

                    <p class="text-big text-gray">Text Big. Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

                    <p class="text-medium text-gray">Text Medium. Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

                    <p class="text-small text-gray">Text Small. Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>


                </section>

                <section class="section animateIn">
                    <h2 class="text-big"> Forms</h2>

                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <label class="label" for="name">Name</label>
                            <div class="input">
                                <input id="name" placeholder="Name" type="text" />
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6">
                            <label class="label" for="name_error">Name</label>
                            <div class="input error">
                                <input id="name_error" placeholder="Name" type="text" />
                            </div>
                            <p class="text-error text-small">$error message</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <label class="label" for="address">Address</label>
                            <div class="input full-width">
                                <input id="address" placeholder="Address" type="text" />
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6">
                            <label class="label" for="address_error">Address</label>
                            <div class="input error full-width">
                                <input id="address_error" placeholder="Address" type="text" />
                            </div>
                            <p class="text-error text-small">$error message</p>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-xs-12 col-md-6">
                            <label class="label" for="country-code">Country</label>
                            <div class="select full-width">
                                <select name="country-code" id="country-code">
                                        <option>Afghanistan</option>
                                        <option>Albania</option>
                                        <option>Algeria</option>
                                        <option>American Samoa</option>
                                        <option>Andorra</option>
                                        <option>Angola</option>

                                </select>
                                <i class="fa fa-angle-down fa-2"></i>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label class="label" for="country-code-error">Country</label>
                            <div class="select full-width error">
                                <select name="country-code-error" id="country-code-error">
                                        <option>Afghanistan</option>
                                        <option>Albania</option>
                                        <option>Algeria</option>
                                        <option>American Samoa</option>
                                        <option>Andorra</option>
                                        <option>Angola</option>

                                </select>
                                <i class="fa fa-angle-down fa-2"></i>
                            </div>
                             <p class="text-error text-small">$error message</p>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-xs-12 col-md-6">
                            <label class="label" for="message">Message</label>
                            <textarea class="textarea" id="message"></textarea>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label class="label" for="message-error">Message</label>
                            <textarea class="textarea error" id="message-error"></textarea>
                            <p class="text-error text-small">$error message</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-3">
                            <h3 class="text-medium text-gray">Radio buttons</h3>
                            <div class="radio">
                               <input id="radio1" name="radio" type="radio" value=""/>
                               <label for="radio1" >Radio button 1</label>
                            </div>
                            <div class="radio">
                               <input id="radio2" name="radio" type="radio" value=""/>
                               <label for="radio2" >Radio button 2</label>
                            </div>
                            <div class="radio">
                               <input id="radio3" name="radio" type="radio" value=""/>
                               <label for="radio3" >Radio button 3</label>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <h3 class="text-medium text-gray">Checkboxes</h3>
                            <div class="checkbox">
                               <input id="checkbox1" name="keywords" type="checkbox" value=""/>
                               <label for="checkbox1">Checkbox 1</label>
                            </div>
                            <div class="checkbox">
                               <input id="checkbox2" name="keywords" type="checkbox" value=""/>
                               <label for="checkbox2">Checkbox 2</label>
                            </div>
                            <div class="checkbox">
                               <input id="checkbox3" name="keywords" type="checkbox" value=""/>
                               <label for="checkbox3">Checkbox 3</label>
                            </div>

                        </div>
                    </div>
                    <h3 class="text-medium text-gray">Form row</h3>
                    <div class="row">
                       <div class="col-xs-12 col-md-6">
                            <div class="row form-row">
                                <div class="col-xs-12 col-md-4">
                                    <div class="input input-with-icon full-width">
                                        <input id="name" placeholder="Your name" type="text" />
                                        <i class="input-icon fa fa-th fa-2"></i>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <div class="input input-with-icon full-width">
                                        <input id="search" placeholder="Search" type="text" />
                                        <i class="input-icon fa fa-cog fa-spin"></i>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <div class="input input-with-icon full-width">
                                        <input id="search" placeholder="Search" type="text" />
                                        <button class="input-icon fa fa-search fa-lg"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="row form-row">
                                <div class="col-xs-12 col-md-4">
                                    <div class="input input-with-icon full-width">
                                        <input id="name" placeholder="Date" type="text" />
                                        <i class="input-icon fa fa-calendar"></i>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <div class="input input-with-icon full-width">
                                        <input id="name" placeholder="Username" type="text" />
                                        <i class="input-icon fa fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <div class="input input-with-icon full-width">
                                        <input id="name" placeholder="Password" type="text" />
                                        <i class="input-icon fa fa-lock"></i>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                    <h3 class="text-medium text-gray">Form collapse</h3>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="form-collapse">
                                <div class="input item item-main">
                                    <input id="name" placeholder="Klingon search" type="text" />
                                </div>
                                <div class="select item">
                                    <select name="country-code" id="country-code">
                                        <option>One</option>
                                        <option>Two</option>
                                        <option>Three</option>
                                        <option>Four</option>
                                    </select>
                                    <i class="fa fa-angle-down fa-2"></i>
                                </div>
                                <button class="item button button-primary">
                                    Search
                                </button>
                            </div>

                        </div>

                        <div class="col-xs-12 col-md-6">
                            <div class="form-collapse">
                                <div class="input item item-main">
                                    <input id="name" placeholder="Klingon search" type="text" />
                                </div>
                                <button class="item button button-primary">
                                   <i class="fa fa-search fa-lg">  </i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="form-collapse">
                                <div class="select item">
                                    <select name="country-code" id="country-code">
                                        <option>Vincent</option>
                                        <option>Jules</option>
                                        <option>Mia </option>
                                        <option>Butch</option>
                                        <option>Winston </option>
                                    </select>
                                    <i class="fa fa-angle-down fa-2"></i>
                                </div>
                                <div class="select item">
                                    <select name="country-code" id="country-code">
                                        <option>Mr. White</option>
                                        <option>Mr. Orange</option>
                                        <option>Mr. Pink</option>
                                        <option>Mr. Blonde</option>
                                        <option>Nice Guy</option>
                                        <option>Mr. Brown</option>
                                        <option>Marvin</option>
                                        <option>Holdaway</option>
                                        <option>Mr. Blue</option>
                                    </select>
                                    <i class="fa fa-angle-down fa-2"></i>
                                </div>
                                 <div class="select item">
                                    <select name="country-code" id="country-code">
                                        <option>Shaw </option>
                                        <option>Kelly</option>
                                        <option>Doyle </option>
                                        <option>Lt. William</option>
                                        <option>Singleton</option>
                                        <option>Billie</option>
                                    </select>
                                    <i class="fa fa-angle-down fa-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section animateIn">
                    <h2 class="text-big">Tables</h2>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <h2 class="text-medium text-gray">Standard</h2>
                            <table class="table">
                                <thead>
                                    <tr class="text-small align-left">
                                        <th>Header 1</th>
                                        <th>Header 2</th>
                                        <th>Header 3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Lemon</td>
                                        <td>Orange</td>
                                        <td>Kiwi</td>
                                    </tr>
                                    <tr>
                                        <td>Sugar</td>
                                        <td>Salt</td>
                                        <td>Pepper</td>
                                    </tr>
                                    <tr>
                                        <td>Fork</td>
                                        <td>Knife</td>
                                        <td>Spoon</td>
                                    </tr>
                                    <tr>
                                        <td>Cup</td>
                                        <td>Glass</td>
                                        <td>Pitcher</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <h2 class="text-medium text-gray">Responsive</h2>
                            <table class="table table-responsive table-break-medium">
                                <tr class="text-small">
                                    <th>First column</th>
                                    <th>Second column</th>
                                    <th>Third column</th>
                                </tr>
                                <tr>
                                    <td data-th="First column">Blue</td>
                                    <td data-th="Second column">One</td>
                                    <td data-th="Third column">My life fades</td>
                                </tr>
                                <tr>
                                    <td data-th="First column">Green</td>
                                    <td data-th="Second column">Two</td>
                                    <td data-th="Third column">When the world was powered by the black fuel... and the desert sprouted great cities of pipe and steel. </td>
                                </tr>
                                <tr>
                                    <td data-th="First column">Yellow</td>
                                    <td data-th="Second column">Three</td>
                                    <td data-th="Third column">A whirlwind of looting, a firestorm of fear. Men began to feed on men. A whirlwind of looting, a firestorm of fear. Men began to feed on men. </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </section>

                <section class="section animateIn">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <h2 class="text-big">Tabs</h2>
                            <div class="tabs">
                               <a href="#" title="Tab 1" class="tab">Tab 1</a>
                               <a href="#" title="Tab 2" class="tab active">Tab 2</a>
                               <a href="#" title="Tab 3" class="tab">Tab 3</a>
                            </div>
                            <!-- <div class="c-tab-content">
                               Content tab 1
                            </div>
                            <div class="c-tab-content selected">
                               Content tab 2
                            </div> -->
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <h2 class="text-big">Tags</h2>
                            <ul class="tags">
                                <li>
                                    <a href="#" class="tag"> fantasy</a>
                                </li>
                                <li>
                                    <a href="#" class="tag"> fiction </a>
                                </li>
                                <li>
                                    <a href="#" class="tag"> contemporary </a>
                                </li>
                                <li>
                                    <a href="#" class="tag"> horror </a>
                                </li>
                                <li>
                                    <a href="#" class="tag"> science-fiction </a>
                                </li>
                                <li>
                                    <a href="#" class="tag"> thriller  </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="section animateIn">
                    <h2 class="text-big">Paginator</h2>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">

                            <h2 class="text-medium text-gray">Default</h2>
                            <ul class="paginator-list">
                                <li class="paginator-list-item">
                                    <a href="#" class="paginator-list-link"><i class="fa fa-angle-left"></i> Prev </a>
                                </li>
                                <li class="paginator-list-item">
                                    <a href="#" class="paginator-list-link">1</a>
                                </li>
                                <li class="paginator-list-item">
                                    <a href="#" class="paginator-list-link active">2</a>
                                </li>
                                <li class="paginator-list-item">
                                    <a href="#" class="paginator-list-link">3</a>
                                </li>
                                <li class="paginator-list-item">
                                    <a href="#" class="paginator-list-link">Next <i class="fa fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <h2 class="text-medium text-gray">Compact</h2>
                            <ul class="paginator-list paginator-compact">
                                <li class="paginator-list-item">
                                    <a href="#" class="paginator-list-link"><i class="fa fa-angle-left"></i> Prev </a>
                                </li>
                                <li class="paginator-list-item">
                                    <a href="#" class="paginator-list-link">1</a>
                                </li>
                                <li class="paginator-list-item">
                                    <a href="#" class="paginator-list-link active">2</a>
                                </li>
                                <li class="paginator-list-item">
                                    <a href="#" class="paginator-list-link">3</a>
                                </li>
                                <li class="paginator-list-item">
                                    <a href="#" class="paginator-list-link">Next <i class="fa fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                 <section class="section animateIn">
                    <h2 class="text-big">Badges</h2>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">

                            <h2 class="text-medium text-gray">Sizes</h2>
                            <ul class="badges-list">
                                <li class="badges-list-item badge-xs">
                                    small
                                </li>
                                <li class="badges-list-item">
                                    default
                                </li>
                                <li class="badges-list-item badge-lg">
                                    large
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <h2 class="text-medium text-gray">Colors</h2>
                            <ul class="badges-list">
                                <li class="badges-list-item">
                                    default
                                </li>
                                <li class="badges-list-item badge-primary">
                                    primary
                                </li>
                                <li class="badges-list-item badge-secondary">
                                    secondary
                                </li>
                                <li class="badges-list-item badge-dark">
                                    dark
                                </li>
                                <li class="badges-list-item badge-success">
                                    success
                                </li>
                                <li class="badges-list-item badge-warning">
                                    warning
                                </li>
                                <li class="badges-list-item badge-error">
                                    error
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="section animateIn">

                    <div class="row">

                        <div class="col-xs-12 col-md-6">
                            <h2 class="text-big">Rating small</h2>

                            <div class="rating-circle circle-small rating-color-1">
                                <div class="circle">
                                    <div class="circle-mask circle-full">
                                        <div class="circle-fill"></div>
                                    </div>
                                    <div class="circle-mask half">
                                        <div class="circle-fill"></div>
                                    </div>
                                </div>
                                <div class="circle-inset"><span class="circle-rating-number">1</span></div>
                            </div>
                            <div class="rating-circle circle-small rating-color-2">
                                <div class="circle">
                                    <div class="circle-mask circle-full">
                                        <div class="circle-fill"></div>
                                    </div>
                                    <div class="circle-mask half">
                                        <div class="circle-fill"></div>
                                    </div>
                                </div>
                                <div class="circle-inset"><span class="circle-rating-number">2</span></div>
                            </div>
                            <div class="rating-circle circle-small rating-color-3">
                                <div class="circle">
                                    <div class="circle-mask circle-full">
                                        <div class="circle-fill"></div>
                                    </div>
                                    <div class="circle-mask half">
                                        <div class="circle-fill"></div>
                                    </div>
                                </div>
                                <div class="circle-inset"><span class="circle-rating-number">3</span></div>
                            </div>
                            <div class="rating-circle circle-small rating-color-4">
                                <div class="circle">
                                    <div class="circle-mask circle-full">
                                        <div class="circle-fill"></div>
                                    </div>
                                    <div class="circle-mask half">
                                        <div class="circle-fill"></div>
                                    </div>
                                </div>
                                <div class="circle-inset"><span class="circle-rating-number">4</span></div>
                            </div>
                            <div class="rating-circle circle-small rating-color-5">
                                <div class="circle">
                                    <div class="circle-mask circle-full">
                                        <div class="circle-fill"></div>
                                    </div>
                                    <div class="circle-mask half">
                                        <div class="circle-fill"></div>
                                    </div>
                                </div>
                                <div class="circle-inset"><span class="circle-rating-number">5</span></div>
                            </div>
                            <div class="rating-circle circle-small rating-color-6">
                                <div class="circle">
                                    <div class="circle-mask circle-full">
                                        <div class="circle-fill"></div>
                                    </div>
                                    <div class="circle-mask half">
                                        <div class="circle-fill"></div>
                                    </div>
                                </div>
                                <div class="circle-inset"><span class="circle-rating-number">6</span></div>
                            </div>
                            <div class="rating-circle circle-small rating-color-7">
                                <div class="circle">
                                    <div class="circle-mask circle-full">
                                        <div class="circle-fill"></div>
                                    </div>
                                    <div class="circle-mask half">
                                        <div class="circle-fill"></div>
                                    </div>
                                </div>
                                <div class="circle-inset"><span class="circle-rating-number">7</span></div>
                            </div>
                            <div class="rating-circle circle-small rating-color-8">
                                <div class="circle">
                                    <div class="circle-mask circle-full">
                                        <div class="circle-fill"></div>
                                    </div>
                                    <div class="circle-mask half">
                                        <div class="circle-fill"></div>
                                    </div>
                                </div>
                                <div class="circle-inset"><span class="circle-rating-number">8</span></div>
                            </div>
                            <div class="rating-circle circle-small rating-color-9">
                                <div class="circle">
                                    <div class="circle-mask circle-full">
                                        <div class="circle-fill"></div>
                                    </div>
                                    <div class="circle-mask half">
                                        <div class="circle-fill"></div>
                                    </div>
                                </div>
                                <div class="circle-inset"><span class="circle-rating-number">9</span></div>
                            </div>
                            <div class="rating-circle circle-small rating-color-10">
                                <div class="circle">
                                    <div class="circle-mask circle-full">
                                        <div class="circle-fill"></div>
                                    </div>
                                    <div class="circle-mask half">
                                        <div class="circle-fill"></div>
                                    </div>
                                </div>
                                <div class="circle-inset"><span class="circle-rating-number">10</span></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <h2 class="text-big">Rating big</h2>
                             <div class="rating-circle rating-color-1">
                                <div class="circle">
                                    <div class="circle-mask circle-full">
                                        <div class="circle-fill"></div>
                                    </div>
                                    <div class="circle-mask half">
                                        <div class="circle-fill"></div>
                                    </div>
                                </div>
                                <div class="circle-inset"><span class="circle-rating-number">1</span></div>
                            </div>
                            <div class="rating-circle rating-color-5">
                                <div class="circle">
                                    <div class="circle-mask circle-full">
                                        <div class="circle-fill"></div>
                                    </div>
                                    <div class="circle-mask half">
                                        <div class="circle-fill"></div>
                                    </div>
                                </div>
                                <div class="circle-inset"><span class="circle-rating-number">5</span></div>
                            </div>
                            <div class="rating-circle rating-color-10">
                                <div class="circle">
                                    <div class="circle-mask circle-full">
                                        <div class="circle-fill"></div>
                                    </div>
                                    <div class="circle-mask half">
                                        <div class="circle-fill"></div>
                                    </div>
                                </div>
                                <div class="circle-inset"><span class="circle-rating-number">10</span></div>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="section animateIn">
                    <h2 class="text-big">Image modifiers</h2>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <h2 class="text-medium text-gray">Circle</h2>
                            <div class="row">
                                <div class="col-xs-4">
                                    <img class="rounded" src="https://placeholdit.imgix.net/~text?txtsize=117&bg=2196f3&txtclr=000000&txt=300%C3%97300&w=300&h=300" alt="Image 1" width="100%"/>
                                </div>
                                <div class="col-xs-4">
                                    <img class="rounded" src="https://placeholdit.imgix.net/~text?txtsize=117&bg=ff9800&txtclr=000000&txt=300%C3%97300&w=300&h=300" alt="Image 2" width="100%"/>
                                </div>
                                <div class="col-xs-4">
                                    <img class="rounded" src="https://placeholdit.imgix.net/~text?txtsize=117&bg=673ab7&txtclr=000000&txt=300%C3%97300&w=300&h=300" alt="Image 3" width="100%"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <h2 class="text-medium text-gray">Rounded corners</h2>
                            <div class="row">
                                <div class="col-xs-4">
                                    <img class="rounded-corners" src="https://placeholdit.imgix.net/~text?txtsize=117&bg=009688&txtclr=000000&txt=300%C3%97300&w=300&h=300" alt="Image 4" width="100%"/>
                                </div>
                                <div class="col-xs-4">
                                    <img class="rounded-corners" src="https://placeholdit.imgix.net/~text?txtsize=117&bg=f44336&txtclr=000000&txt=300%C3%97300&w=300&h=300" alt="Image 5" width="100%"/>
                                </div>
                                <div class="col-xs-4">
                                    <img class="rounded-corners" src="https://placeholdit.imgix.net/~text?txtsize=117&bg=009688&txtclr=000000&txt=300%C3%97300&w=300&h=300" alt="Image 6" width="100%"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section animateIn">
                    <h2 class="text-big">Aligners</h2>
                    <div>
                        <h3 class="text-medium text-gray">Space between</h3>
                        <div class="container background-gray">
                            <div class="section">
                                <div class="aligner-space-between">
                                    <div><img src="https://placeholdit.imgix.net/~text?txtsize=117&bg=009688&txtclr=000000&txt=300%C3%97300&w=300&h=300" alt="Image 4" width="150"/></div>
                                    <div><img src="https://placeholdit.imgix.net/~text?txtsize=117&bg=f44336&txtclr=000000&txt=300%C3%97300&w=300&h=300" alt="Image 5" width="150"/></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <h3 class="text-medium text-gray">Space around</h3>
                    <div class="container background-gray">
                        <div class="section">
                            <div class="aligner-space-around">
                                <div><img src="https://placeholdit.imgix.net/~text?txtsize=117&bg=009688&txtclr=000000&txt=300%C3%97300&w=300&h=300" alt="Image 6" width="150"/></div>
                                <div><img src="https://placeholdit.imgix.net/~text?txtsize=117&bg=f44336&txtclr=000000&txt=300%C3%97300&w=300&h=300" alt="Image 5" width="150"/></div>
                                <div><img src="https://placeholdit.imgix.net/~text?txtsize=117&bg=2196f3&txtclr=000000&txt=300%C3%97300&w=300&h=300" alt="Image 1" width="150"/></div>
                                <div><img src="https://placeholdit.imgix.net/~text?txtsize=117&bg=ff9800&txtclr=000000&txt=300%C3%97300&w=300&h=300" alt="Image 2" width="150"/></div>
                            </div>

                        </div>
                    </div>

                    <div class="section row">
                        <div class="col-xs-12 col-md-6">
                            <h3 class="text-medium text-gray">Align start</h3>
                            <div class="container background-gray">
                                <div class="section">
                                    <div class="content-start">
                                        <div><img src="https://placeholdit.imgix.net/~text?txtsize=117&bg=2196f3&txtclr=000000&txt=300%C3%97300&w=300&h=300" alt="Image 1" width="150"/></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <h3 class="text-medium text-gray">Align end</h3>
                            <div class="container background-gray">
                                <div class="section">
                                    <div class="content-end">
                                        <div><img src="https://placeholdit.imgix.net/~text?txtsize=117&bg=673ab7&txtclr=000000&txt=300%C3%97300&w=300&h=300" alt="Image 3" width="150"/></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <h3 class="text-medium text-gray">Center vertical</h3>
                            <div class="container background-gray" >
                                <div class="section">
                                    <div class="aligner-center-vertical" style="height:150px;">
                                        <p class="text-dark no-margin">Lorem ipsum dolor sit amet</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <h3 class="text-medium text-gray">Center vertical and horitzontal</h3>
                            <div class="container background-gray" >
                                <div class="section">
                                    <div class="aligner-center-horitzontal aligner-center-vertical" style="height:150px;">
                                        <p class="text-dark no-margin">Lorem ipsum dolor sit amet</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <h3 class="text-medium text-gray">Align to bottom</h3>
                            <div class="container background-gray" >
                                <div class="section">
                                    <div class="aligner" style="height:150px;">
                                        <p class="text-dark no-margin aligner-item-bottom">Lorem ipsum dolor sit amet</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section animateIn">
                    <h2 class="text-big">Low opacity</h2>
                    <div class="container background-gray opacity-low">
                        <div class="section">
                            <div class="aligner-center-horitzontal aligner-center-vertical" style="height:150px;">
                                <img src="https://placeholdit.imgix.net/~text?txtsize=117&bg=2196f3&txtclr=000000&txt=300%C3%97300&w=300&h=300" alt="Image 1" width="150"/>
                            </div>

                        </div>
                    </div>

                </section>
                 <section class="section animateIn">
                    <h2 class="text-big">Loaders</h2>
                    <div>
                        <a href="#" class="js-show-hide-loading-bar button block-mobile" title="Start / stop loader">Show loading bar</a>
                        <a href="#" class="js-show-hide-loading-spinner button block-mobile" title="Start / stop loader">Show loading spinner</a>
                    </div>
                </section>

                <section class="section animateIn">
                    <h2 class="text-big">Customizable colors</h2>
                    <h3 class="text-medium text-gray">Brand ( primary / secondary )</h3>
                    <div class="aligner-space-around">
                        <div class="flex-grow background-primary"><br><br></div>
                        <div class="flex-grow background-secondary"><br><br></div>
                    </div>

                    <h3 class="text-medium text-gray">Success / info / error / warning</h3>
                    <div class="aligner-space-around">
                        <div class="flex-grow background-success"><br><br></div>
                        <div class="flex-grow background-info"><br><br></div>
                        <div class="flex-grow background-warning"><br><br></div>
                        <div class="flex-grow background-error"><br><br></div>
                    </div>

                    <h3 class="text-medium text-gray">Rating</h3>
                    <div class="aligner-space-around">
                        <div class="flex-grow background-rating1"><br><br></div>
                        <div class="flex-grow background-rating2"><br><br></div>
                        <div class="flex-grow background-rating3"><br><br></div>
                        <div class="flex-grow background-rating4"><br><br></div>
                        <div class="flex-grow background-rating5"><br><br></div>
                        <div class="flex-grow background-rating6"><br><br></div>
                        <div class="flex-grow background-rating7"><br><br></div>
                        <div class="flex-grow background-rating8"><br><br></div>
                        <div class="flex-grow background-rating9"><br><br></div>
                        <div class="flex-grow background-rating10"><br><br></div>
                    </div>

                    <h3 class="text-medium text-gray">Others</h3>
                    <div class="aligner-space-around">
                        <div class="flex-grow background-white"><br><br></div>
                        <div class="flex-grow background-gray-light"><br><br></div>
                        <div class="flex-grow background-gray"><br><br></div>
                        <div class="flex-grow background-dark"><br><br></div>
                    </div>
                </section>

            </div>

            <div class="section">
                <div class="container">
                    <h2 class="text-big">Full width bars</h2>
                </div>
                <div class="section background-dark">
                    <div class="container text-center">
                        <h3 class="text-huge text-white text-with-subtitle">We can be heroes</h3>
                        <h4 class="text-big text-gray">just for one day</h4>
                    </div>
                </div>
            </div>
            <div class="container">
                <section>
                    <h2 class="text-big">Message bars</h2>
                    <div class="message-bar background-success"><p>Success</p></div>
                    <div class="message-bar background-info"><p>Info</p></div>
                    <div class="message-bar background-warning"><p>Warning</p></div>
                    <div class="message-bar background-error"><p>Error</p></div>
                </section>
            </div>

            <section class="section animateIn">
                <div class="container">
                    <h2 class="text-big">Containers</h2>
                    <h3 class="text-medium text-gray">Standard</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>

                <div class="container-medium">
                    <h3 class="text-medium text-gray">Medium</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>

                <div class="container-small">
                    <h3 class="text-medium text-gray">Small</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </section>
            <div class="container">
                <section class="section animateIn">
                    <h2 class="text-big">Borders</h2>
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <h3 class="text-medium text-gray">Border top + border bottom</h3>
                            <div class="container section border-top border-bottom"><br></div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <h3 class="text-medium text-gray">Border right + border left</h3>
                            <div class="container section border-right border-left"><br></div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <h3 class="text-medium text-gray">Bordered</h3>
                            <div class="container section bordered"><br></div>
                        </div>
                    </div>
                </section>


                    </section>

                </article> <!-- end article -->


            <?php endwhile; endif; ?>

        </div> <!-- end #main -->

        <?php //get_sidebar(); // sidebar 1 ?>

    </div> <!-- end #content -->

<?php get_footer(); ?>
