<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.0.17.10';

if ($_SERVER['HTTP_HOST'] == '127.0.0.1'){
    // local Database
    $Configuration['Database']['Name'] = 'forum-vanilla';
    $Configuration['Database']['Host'] = 'localhost';
    $Configuration['Database']['User'] = 'root';
    $Configuration['Database']['Password'] = 'root';
}

else{
    echo "using pagoda db";
    exit;
    // pagoda Database
    $Configuration['Database']['Name'] = 'ula';
    $Configuration['Database']['Host'] = 'localhost:/tmp/mysql/ula.sock';
    $Configuration['Database']['User'] = 'season';
    $Configuration['Database']['Password'] = 'KlwvX63x';
}

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';

// Garden
$Configuration['Garden']['Title'] = 'Pagoda Forum';
$Configuration['Garden']['Cookie']['Salt'] = '2GPQ27DJFN';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Version'] = '2.0.17.10';
$Configuration['Garden']['RewriteUrls'] = TRUE;
$Configuration['Garden']['CanProcessImages'] = TRUE;
$Configuration['Garden']['Installed'] = TRUE;
$Configuration['Garden']['Errors']['MasterView'] = 'deverror.master.php';
$Configuration['Garden']['Errors']['LogEnabled'] = TRUE;
$Configuration['Garden']['Theme'] = 'default';

// Modules
$Configuration['Modules']['Vanilla']['Content'] = 'a:6:{i:0;s:13:"MessageModule";i:1;s:7:"Notices";i:2;s:21:"NewConversationModule";i:3;s:19:"NewDiscussionModule";i:4;s:7:"Content";i:5;s:3:"Ads";}';
$Configuration['Modules']['Conversations']['Content'] = 'a:6:{i:0;s:13:"MessageModule";i:1;s:7:"Notices";i:2;s:21:"NewConversationModule";i:3;s:19:"NewDiscussionModule";i:4;s:7:"Content";i:5;s:3:"Ads";}';

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';

// Routes
$Configuration['Routes']['DefaultController'] = 'discussions';

// Vanilla
$Configuration['Vanilla']['Version'] = '2.0.17.10';

// Last edited by pagoda_admin (127.0.0.1)2011-06-13 16:14:05