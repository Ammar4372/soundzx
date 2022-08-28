<div id="switcher">
    <div class="switcher white" id="sw-theme">
        <a href="#" data-ui-toggle-class="active" data-ui-target="#sw-theme" class="white sw-btn">
            <i class="fa fa-gear text-muted"></i>
        </a>
        <div class="box-header">
            <strong>Theme Switcher</strong>
        </div>
        <div class="box-divider"></div>
        <div class="box-body">
            <p id="settingLayout" class="hidden-md-down">
                <label class="md-check m-y-xs" data-target="folded">
                    <input type="checkbox">
                    <i class="green"></i>
                    <span>Folded Aside</span>
                </label>
                <label class="m-y-xs pointer" data-ui-fullscreen data-target="fullscreen">
                    <span class="fa fa-expand fa-fw m-r-xs"></span>
                    <span>Fullscreen Mode</span>
                </label>
            </p>
            <p>Colors:</p>
            <p data-target="color">
                <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                    <input type="radio" name="color" value="primary">
                    <i class="primary"></i>
                </label>
                <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                    <input type="radio" name="color" value="accent">
                    <i class="accent"></i>
                </label>
                <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                    <input type="radio" name="color" value="warn">
                    <i class="warn"></i>
                </label>
                <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                    <input type="radio" name="color" value="success">
                    <i class="success"></i>
                </label>
                <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                    <input type="radio" name="color" value="info">
                    <i class="info"></i>
                </label>
                <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                    <input type="radio" name="color" value="blue">
                    <i class="blue"></i>
                </label>
                <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                    <input type="radio" name="color" value="warning">
                    <i class="warning"></i>
                </label>
                <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                    <input type="radio" name="color" value="danger">
                    <i class="danger"></i>
                </label>
            </p>
            <p>Themes:</p>
            <div data-target="bg" class="text-u-c text-center _600 clearfix">
                <label class="p-a col-xs-3 light pointer m-a-0">
                    <input type="radio" name="theme" value="" hidden>
                    <i class="active-checked fa fa-check"></i>
                </label>
                <label class="p-a col-xs-3 grey pointer m-a-0">
                    <input type="radio" name="theme" value="grey" hidden>
                    <i class="active-checked fa fa-check"></i>
                </label>
                <label class="p-a col-xs-3 dark pointer m-a-0">
                    <input type="radio" name="theme" value="dark" hidden>
                    <i class="active-checked fa fa-check"></i>
                </label>
                <label class="p-a col-xs-3 black pointer m-a-0">
                    <input type="radio" name="theme" value="black" hidden>
                    <i class="active-checked fa fa-check"></i>
                </label>
            </div>
        </div>
    </div>
</div>