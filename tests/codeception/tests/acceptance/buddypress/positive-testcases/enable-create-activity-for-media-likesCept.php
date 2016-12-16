<?php

/**
* Scenario : Allow user to enable activity for media likes.
*/

    use Page\Login as LoginPage;
    use Page\Constants as ConstantsPage;
    use Page\DashboardSettings as DashboardSettingsPage;

    $I = new AcceptanceTester($scenario);
    $I->wantTo('Check if the user is allowed to enable activity for media likes.');

    $loginPage = new LoginPage($I);
    $loginPage->loginAsAdmin(ConstantsPage::$userName,ConstantsPage::$password);

    $settings = new DashboardSettingsPage($I);
    $settings->gotoTab($I,ConstantsPage::$buddypressTab,ConstantsPage::$buddypressTabUrl);
    $settings->enableSetting($I,ConstantsPage::$strActivityMediaLikeLabel,ConstantsPage::$activityMediaLikeCheckbox);

?>
