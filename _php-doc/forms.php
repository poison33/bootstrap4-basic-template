<?php require 'php-inc/inc_html_head.php'; ?> 
        <main class="content-wrap">
<?php require 'php-inc/inc_page_header.php'; ?> 

            <div class="container">
                <div class="row">
                    <article class="col-xs-12">
                        <header class="m-b-1 m-t-2">
                            <h1 class="m-y-0">Forms</h1>
                            <hr class="m-b-0 m-t-1">
                        </header>

                        <h2>Basic example</h2>
                        <div class="example-block">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">อีเมล</label>
                                    <input id="exampleInputEmail1" class="form-control" type="email" placeholder="Enter email" aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">รหัสผ่าน</label>
                                    <input id="exampleInputPassword1" class="form-control" type="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelect1">Example select</label>
                                    <select id="exampleSelect1" class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelect2">Example multiple select</label>
                                    <select id="exampleSelect2" class="form-control" multiple>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Example textarea</label>
                                    <textarea id="exampleTextarea1" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile1">File input</label>
                                    <input id="exampleInputFile1" class="form-control-file" type="file" aria-describedby="fileHelp">
                                    <small id="fileHelp1" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                </div>
                                <fieldset class="form-group">
                                    <legend>Radio buttons</legend>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input id="optionsRadios1" class="form-check-input" type="radio" name="optionsRadios" value="option1" checked>
                                            ตัวเลือก 1
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input id="optionsRadios2" class="form-check-input" type="radio" name="optionsRadios" value="option2">
                                            Option 2
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <label class="form-check-label">
                                            <input id="optionsRadios3" class="form-check-input" type="radio" name="optionsRadios" value="option3" disabled>
                                            Option 3 is disabled
                                        </label>
                                    </div>
                                </fieldset>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox">
                                        ติ๊กเลือก 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox">
                                        Check box 2
                                    </label>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <button class="btn btn-secondary" type="reset">Reset</button>
                            </form>
                        </div>
                        <h3>Input types</h3>
                        <div class="example-block">
<?php
                            // demo all input types with .form-control class. referrer: http://www.w3schools.com/html/html_form_input_types.asp
                            $input_types = [
                                'text' => ['value' => 'Input text value', 'autocomplete' => 'off'],
                                'password' => ['value' => 'myPa$sW0rd'],
                                'color' => ['value' => '#FF860B'],
                                'date' => ['value' => date('Y-m-d')],
                                'datetime-local' => ['value' => date('Y-m-d\TH:i:s')],
                                'email' => ['value' => 'someone@email.tld', 'autocomplete' => 'off'],
                                'month' => ['value' => date('Y-m')],
                                'number' => ['min' => 0, 'max' => 255, 'value' => 65],
                                'range' => ['min' => 1, 'max' => 500, 'value' => 100],
                                'serch' => ['value' => 'Search query', 'autocomplete' => 'off'],
                                'tel' => ['value' => '02-111-1111', 'autocomplete' => 'off'],
                                'time' => ['value' => date('H:i:s')],
                                'url' => ['value' => 'http://rundiz.com', 'autocomplete' => 'off'],
                                'week' => ['value' => date('Y-\WW')],
                            ];
                            foreach ($input_types as $key => $items) {
                                echo '                            <div class="form-group row">'."\n";
                                echo '                                <label for="example-input-types-form-control-'.$key.'" class="col-xs-4 col-sm-2 col-form-label">'.ucfirst($key).'</label>'."\n";
                                echo '                                <div class="col-xs-8 col-sm-10">'."\n";
                                echo '                                    <input id="example-input-types-form-control-'.$key.'" class="form-control" type="'.$key.'"';
                                if (is_array($items)) {
                                    foreach ($items as $item_key => $item_val) {
                                        echo ' '.$item_key.'="'.$item_val.'"';
                                    }
                                    unset($item_key, $item_val);
                                }
                                echo '>'."\n";
                                echo '                                </div>'."\n";
                                echo '                            </div>'."\n";
                            }
                            unset($input_types, $items, $key);
?> 
                            <p class="m-b-0"><small><a href="http://www.w3schools.com/html/html_form_input_types.asp" target="reference_input_types" rel="nofollow">Reference</a></small></p>
                        </div>

                        <h2>Inline forms</h2>
                        <h3>Visible labels</h3>
                        <div class="example-block">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="exampleInputName2">Name</label>
                                    <input id="exampleInputName2" class="form-control" type="text" placeholder="Jane Doe">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail2">Email</label>
                                    <input id="exampleInputEmail2" class="form-control" type="email" placeholder="jane.doe@example.com">
                                </div>
                                <button class="btn btn-primary" type="submit">Send invitation</button>
                            </form>
                        </div>
                        <h3>Hidden labels</h3>
                        <div class="example-block">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputName3">Name</label>
                                    <input id="exampleInputName2" class="form-control" type="text" placeholder="Jane Doe">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail3">Email</label>
                                    <input id="exampleInputEmail2" class="form-control" type="email" placeholder="jane.doe@example.com">
                                </div>
                                <button class="btn btn-primary" type="submit">Send invitation</button>
                            </form>
                        </div>
                        <h3>Static controls</h3>
                        <div class="example-block">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label class="sr-only">Email</label>
                                    <p class="form-control-static">email@example.com</p>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="inlineInputPassword1">Password</label>
                                    <input id="inlineInputPassword1" class="form-control" type="password" placeholder="Password">
                                </div>
                                <button class="btn btn-primary" type="submit">Confirm identity</button>
                            </form>
                        </div>
                        <h3>Help text inline</h3>
                        <div class="example-block">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="inlineInputPassword2">Password</label>
                                    <input id="inlineInputPassword2" class="form-control" type="password" aria-describedby="passwordHelpInline">
                                    <small id="passwordHelpInline" class="text-muted">
                                        Must be 8-20 characters long.
                                    </small>
                                </div>
                            </form>
                        </div>

                        <h2>Using the grids</h2>
                        <div class="example-block">
                            <form>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2" for="exampleInputEmail4">อีเมล</label>
                                    <div class="col-sm-10">
                                        <input id="exampleInputEmail4" class="form-control" type="email" placeholder="Enter email" aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2" for="exampleInputPassword2">รหัสผ่าน</label>
                                    <div class="col-sm-10">
                                        <input id="exampleInputPassword2" class="form-control" type="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2" for="exampleSelect3">Example select</label>
                                    <div class="col-sm-10">
                                        <select id="exampleSelect3" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2" for="exampleSelect4">Example multiple select</label>
                                    <div class="col-sm-10">
                                        <select id="exampleSelect4" class="form-control" multiple>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2" for="exampleTextarea2">Example textarea</label>
                                    <div class="col-sm-10">
                                        <textarea id="exampleTextarea2" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2" for="exampleInputFile2">File input</label>
                                    <div class="col-sm-10">
                                        <input id="exampleInputFile2" class="form-control-file" type="file" aria-describedby="fileHelp">
                                        <small id="fileHelp2" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                    </div>
                                </div>
                                <fieldset class="form-group row">
                                    <legend class="col-form-legend col-sm-2">Radio buttons</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input id="optionsRadios4" class="form-check-input" type="radio" name="optionsRadiosGrid" value="option1" checked>
                                                ตัวเลือก 1
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input id="optionsRadios5" class="form-check-input" type="radio" name="optionsRadiosGrid" value="option2">
                                                Option 2
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <label class="form-check-label">
                                                <input id="optionsRadios6" class="form-check-input" type="radio" name="optionsRadiosGrid" value="option3" disabled>
                                                Option 3 is disabled
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2">Checkbox</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                ติ๊กเลือก 1
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                Check box 2
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2">Static controls</label>
                                    <div class="col-sm-10">
                                        <p class="form-control-static">email@example.com</p>
                                    </div>
                                </div>
                                <hr>
                                <h4>Disabled inputs</h4>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2" for="input-text-disabled-example">Disabled input</label>
                                    <div class="col-sm-10">
                                        <input id="input-text-disabled-example" class="form-control" type="text" name="input-disabled" value="disabled input text" disabled="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2" for="input-select-disabled-example">Disabled select</label>
                                    <div class="col-sm-10">
                                        <select id="input-select-disabled-example" class="form-control" name="select-disabled" disabled="">
                                            <option value="">-- please select --</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2">Disabled checkbox</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" disabled="">
                                                ติ๊กเลือก 1
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" disabled="">
                                                Check box 2
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h4>Readonly inputs</h4>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2" for="input-text-readonly-example">Readonly input</label>
                                    <div class="col-sm-10">
                                        <input id="input-text-readonly-example" class="form-control" type="text" name="input-readonly" value="readonly input text" readonly="">
                                    </div>
                                </div>
                                <hr>
                                <h4>Control sizing</h4>
                                <div class="form-group row">
                                    <label class="col-form-label col-form-label-sm col-sm-2" for="input-text-size-sm-example">Small input</label>
                                    <div class="col-sm-10">
                                        <input id="input-text-size-sm-example" class="form-control form-control-sm" type="text" name="input-sm" value="small input text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-form-label-lg col-sm-2" for="input-text-size-lg-example">Large input</label>
                                    <div class="col-sm-10">
                                        <input id="input-text-size-lg-example" class="form-control form-control-lg" type="text" name="input-lg" value="large input text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-form-label-sm col-sm-2" for="input-select-size-sm-example">Small select</label>
                                    <div class="col-sm-10">
                                        <select id="input-select-size-sm-example" class="form-control form-control-sm" name="select">
                                            <option value="small select">small select</option>
                                            <option value="small select">small select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-form-label-lg col-sm-2" for="input-select-size-lg-example">Large select</label>
                                    <div class="col-sm-10">
                                        <select id="input-select-size-lg-example" class="form-control form-control-lg" name="select">
                                            <option value="small select">small select</option>
                                            <option value="small select">small select</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <h4>Checkbox and radio inline</h4>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2">checkbox</label>
                                    <div class="col-sm-10">
                                        <label class="form-check-inline">
                                            <input id="inlineCheckbox1" class="form-check-input" type="checkbox" value="option1"> 1
                                        </label>
                                        <label class="form-check-inline">
                                            <input id="inlineCheckbox2" class="form-check-input" type="checkbox" value="option2"> 2
                                        </label>
                                        <label class="form-check-inline">
                                            <input id="inlineCheckbox3" class="form-check-input" type="checkbox" value="option3"> 3
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2">radio</label>
                                    <div class="col-sm-10">
                                        <label class="form-check-inline">
                                            <input id="inlineRadio1" class="form-check-input" type="radio" name="inlineRadioOptionsInline" value="option1"> 1
                                        </label>
                                        <label class="form-check-inline">
                                            <input id="inlineRadio2" class="form-check-input" type="radio" name="inlineRadioOptionsInline" value="option2"> 2
                                        </label>
                                        <label class="form-check-inline">
                                            <input id="inlineRadio3" class="form-check-input" type="radio" name="inlineRadioOptionsInline" value="option3"> 3
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <h4>Validation</h4>
                                <div class="form-group row has-success">
                                    <label class="col-form-label col-sm-2" for="input-text-validation-success-example">Input with success</label>
                                    <div class="col-sm-10">
                                        <input id="input-text-validation-success-example" class="form-control form-control-success" type="text" name="input-validation">
                                        <div class="form-control-feedback">Success! You've done it.</div>
                                        <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                    </div>
                                </div>
                                <div class="form-group row has-warning">
                                    <label class="col-form-label col-sm-2" for="input-text-validation-warning-example">Input with warning</label>
                                    <div class="col-sm-10">
                                        <input id="input-text-validation-warning-example" class="form-control form-control-warning" type="text" name="input-validation">
                                        <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                                        <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                    </div>
                                </div>
                                <div class="form-group row has-danger">
                                    <label class="col-form-label col-sm-2" for="input-text-validation-danger-example">Input with danger</label>
                                    <div class="col-sm-10">
                                        <input id="input-text-validation-danger-example" class="form-control form-control-danger" type="text" name="input-validation">
                                        <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                                        <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                    </div>
                                </div>
                                <fieldset class="form-group row">
                                    <legend class="col-form-legend col-sm-2">Radio validation</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check has-success">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="optionsRadiosValidation" value="option1" checked>
                                                ตัวเลือก 1 สำเร็จ! success!
                                            </label>
                                        </div>
                                        <div class="form-check has-warning">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="optionsRadiosValidation" value="option2">
                                                Option 2 warning
                                            </label>
                                        </div>
                                        <div class="form-check has-danger">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="optionsRadiosValidation" value="option3">
                                                Option 3 danger
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2">Checkbox validation</label>
                                    <div class="col-sm-10">
                                        <div class="form-check has-success">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" checked="">
                                                ติ๊กเลือก 1 สำเร็จ! success!
                                            </label>
                                        </div>
                                        <div class="form-check has-warning">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                Check box 2 warning
                                            </label>
                                        </div>
                                        <div class="form-check has-danger">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                Check box 3 danger
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <button class="btn btn-secondary" type="reset">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <h2>Custom forms</h2>
                        <h3>Check boxes and radios</h3>
                        <div class="example-block">
                            <form>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2">Checkbox inline</label>
                                    <div class="col-sm-10">
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">ติ๊กเลือก 1</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Check box 2</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" disabled>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Check box 3 disabled</span>
                                        </label>
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input checkbox-indeterminate" type="checkbox">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Check box 4 indeterminate</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2">Checkbox stacked</label>
                                    <div class="col-sm-10">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">ติ๊กเลือก 1</span>
                                            </label>
                                        </div>
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Check box 2</span>
                                            </label>
                                        </div>
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" disabled="">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Check box 3 disabled</span>
                                            </label>
                                        </div>
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control custom-checkbox">
                                                <input class="custom-control-input checkbox-indeterminate" type="checkbox">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Check box 4 indeterminate</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2">Radio inline</label>
                                    <div class="col-sm-10">
                                        <label class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="radiocustom1">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">ตัวเลือก 1</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="radiocustom1">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Option 2</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="radiocustom1" disabled>
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Option 3 disabled</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2">Radio stacked</label>
                                    <div class="col-sm-10">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="radiocustom2">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">ตัวเลือก 1</span>
                                            </label>
                                        </div>
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="radiocustom2">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Option 2</span>
                                            </label>
                                        </div>
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="radiocustom2" disabled="">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Option 3 disabled</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2">Checkbox validation</label>
                                    <div class="col-sm-10">
                                        <div class="custom-controls-stacked has-success">
                                            <label class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" checked="">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">ติ๊กเลือก 1</span>
                                            </label>
                                        </div>
                                        <div class="custom-controls-stacked has-warning">
                                            <label class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Check box 2</span>
                                            </label>
                                        </div>
                                        <div class="custom-controls-stacked has-danger">
                                            <label class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Check box 3</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2">Radio validation</label>
                                    <div class="col-sm-10">
                                        <div class="custom-controls-stacked has-success">
                                            <label class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="radiocustom3" checked="">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">ตัวเลือก 1</span>
                                            </label>
                                        </div>
                                        <div class="custom-controls-stacked has-warning">
                                            <label class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="radiocustom3">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Option 2</span>
                                            </label>
                                        </div>
                                        <div class="custom-controls-stacked has-danger">
                                            <label class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="radiocustom3">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Option 3 disabled</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <button class="btn btn-secondary" type="reset">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <h3>Select menu</h3>
                        <div class="example-block">
                            <form>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2">Select box</label>
                                    <div class="col-sm-10">
                                        <select class="custom-select">
                                            <option selected>กรุณาเลือก</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <button class="btn btn-secondary" type="reset">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <h3>File browser</h3>
                        <div class="example-block">
                            <form>
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-2">Input file</label>
                                    <div class="col-sm-10">
                                        <label class="custom-file">
                                            <input id="file" class="custom-file-input" type="file">
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <button class="btn btn-secondary" type="reset">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </article>
                </div>
            </div>
        </main>

<?php require 'php-inc/inc_page_footer.php'; ?> 
<?php require 'php-inc/inc_html_foot.php'; ?> 