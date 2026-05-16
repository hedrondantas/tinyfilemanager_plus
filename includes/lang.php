<?php
    /**
     * Language Translation System
     * @param string $txt
     * @return string
     */
    function lng($txt)
    {
        global $lang;

        // English Language
        $tr['en']['AppName']        = 'Tiny File Manager';
        $tr['en']['AppTitle']       = 'File Manager';
        $tr['en']['Login']          = 'Sign in';
        $tr['en']['Username']       = 'Username';
        $tr['en']['Password']       = 'Password';
        $tr['en']['Logout']         = 'Sign Out';
        $tr['en']['Move']           = 'Move';
        $tr['en']['Copy']           = 'Copy';
        $tr['en']['Save']           = 'Save';
        $tr['en']['SelectAll']      = 'Select all';
        $tr['en']['UnSelectAll']    = 'Unselect all';
        $tr['en']['File']           = 'File';
        $tr['en']['Back']           = 'Back';
        $tr['en']['Size']           = 'Size';
        $tr['en']['Perms']          = 'Perms';
        $tr['en']['Modified']       = 'Modified';
        $tr['en']['Owner']          = 'Owner';
        $tr['en']['Search']         = 'Search';
        $tr['en']['NewItem']        = 'New Item';
        $tr['en']['Folder']         = 'Folder';
        $tr['en']['Delete']         = 'Delete';
        $tr['en']['Rename']         = 'Rename';
        $tr['en']['CopyTo']         = 'Copy to';
        $tr['en']['DirectLink']     = 'Direct link';
        $tr['en']['UploadingFiles'] = 'Upload Files';
        $tr['en']['ChangePermissions']  = 'Change Permissions';
        $tr['en']['Copying']        = 'Copying';
        $tr['en']['CreateNewItem']  = 'Create New Item';
        $tr['en']['Name']           = 'Name';
        $tr['en']['AdvancedEditor'] = 'Advanced Editor';
        $tr['en']['Actions']        = 'Actions';
        $tr['en']['Folder is empty'] = 'Folder is empty';
        $tr['en']['Upload']         = 'Upload';
        $tr['en']['Cancel']         = 'Cancel';
        $tr['en']['InvertSelection'] = 'Invert Selection';
        $tr['en']['DestinationFolder']  = 'Destination Folder';
        $tr['en']['ItemType']       = 'Item Type';
        $tr['en']['ItemName']       = 'Item Name';
        $tr['en']['CreateNow']      = 'Create Now';
        $tr['en']['Download']       = 'Download';
        $tr['en']['Open']           = 'Open';
        $tr['en']['UnZip']          = 'UnZip';
        $tr['en']['UnZipToFolder']  = 'UnZip to folder';
        $tr['en']['Edit']           = 'Edit';
        $tr['en']['NormalEditor']   = 'Normal Editor';
        $tr['en']['BackUp']         = 'Back Up';
        $tr['en']['SourceFolder']   = 'Source Folder';
        $tr['en']['Files']          = 'Files';
        $tr['en']['Move']           = 'Move';
        $tr['en']['Change']         = 'Change';
        $tr['en']['Settings']       = 'Settings';
        $tr['en']['Settings could not be saved. Check file permissions.'] = 'Settings could not be saved. Check file permissions.';
        $tr['en']['Language']       = 'Language';
        $tr['en']['ErrorReporting'] = 'Error Reporting';
        $tr['en']['ShowHiddenFiles'] = 'Show Hidden Files';
        $tr['en']['Help']           = 'Help';
        $tr['en']['Created']        = 'Created';
        $tr['en']['Help Documents'] = 'Help Documents';
        $tr['en']['Report Issue']   = 'Report Issue';
        $tr['en']['Generate']       = 'Generate';
        $tr['en']['FullSize']       = 'Full Size';
        $tr['en']['HideColumns']    = 'Hide Perms/Owner columns';
        $tr['en']['You are logged in'] = 'You are logged in';
        $tr['en']['Nothing selected']  = 'Nothing selected';
        $tr['en']['Paths must be not equal']    = 'Paths must be not equal';
        $tr['en']['Renamed from']       = 'Renamed from';
        $tr['en']['Archive not unpacked'] = 'Archive not unpacked';
        $tr['en']['Deleted']            = 'Deleted';
        $tr['en']['Archive not created'] = 'Archive not created';
        $tr['en']['Copied from']        = 'Copied from';
        $tr['en']['Permissions changed'] = 'Permissions changed';
        $tr['en']['to']                 = 'to';
        $tr['en']['Saved Successfully'] = 'Saved Successfully';
        $tr['en']['not found!']         = 'not found!';
        $tr['en']['File Saved Successfully']    = 'File Saved Successfully';
        $tr['en']['Archive']            = 'Archive';
        $tr['en']['Permissions not changed']    = 'Permissions not changed';
        $tr['en']['Select folder']      = 'Select folder';
        $tr['en']['Source path not defined']    = 'Source path not defined';
        $tr['en']['already exists']     = 'already exists';
        $tr['en']['Error while moving from']    = 'Error while moving from';
        $tr['en']['Create archive?']    = 'Create archive?';
        $tr['en']['Invalid file or folder name']    = 'Invalid file or folder name';
        $tr['en']['Archive unpacked']   = 'Archive unpacked';
        $tr['en']['File extension is not allowed']  = 'File extension is not allowed';
        $tr['en']['Root path']          = 'Root path';
        $tr['en']['Error while renaming from']  = 'Error while renaming from';
        $tr['en']['File not found']     = 'File not found';
        $tr['en']['Error while deleting items'] = 'Error while deleting items';
        $tr['en']['Moved from']         = 'Moved from';
        $tr['en']['Generate new password hash'] = 'Generate new password hash';
        $tr['en']['Login failed. Invalid username or password'] = 'Login failed. Invalid username or password';
        $tr['en']['password_hash not supported, Upgrade PHP version'] = 'password_hash not supported, Upgrade PHP version';
        $tr['en']['Advanced Search']    = 'Advanced Search';
        $tr['en']['Error while copying from']    = 'Error while copying from';
        $tr['en']['Invalid characters in file name']                = 'Invalid characters in file name';
        $tr['en']['FILE EXTENSION IS NOT SUPPORTED']                = 'FILE EXTENSION IS NOT SUPPORTED';
        $tr['en']['Selected files and folder deleted']              = 'Selected files and folder deleted';
        $tr['en']['Error while fetching archive info']              = 'Error while fetching archive info';
        $tr['en']['Delete selected files and folders?']             = 'Delete selected files and folders?';
        $tr['en']['Search file in folder and subfolders...']        = 'Search file in folder and subfolders...';
        $tr['en']['Access denied. IP restriction applicable']       = 'Access denied. IP restriction applicable';
        $tr['en']['Invalid characters in file or folder name']      = 'Invalid characters in file or folder name';
        $tr['en']['Operations with archives are not available']     = 'Operations with archives are not available';
        $tr['en']['File or folder with this path already exists']   = 'File or folder with this path already exists';
        $tr['en']['Are you sure want to rename?']                   = 'Are you sure want to rename?';
        $tr['en']['Are you sure want to']                           = 'Are you sure want to';
        $tr['en']['Date Modified']                                  = 'Date Modified';
        $tr['en']['File size']                                      = 'File size';
        $tr['en']['MIME-type']                                      = 'MIME-type';

        $i18n = fm_get_translations($tr);
        $tr = $i18n ? $i18n : $tr;

        if (!strlen($lang)) $lang = 'en';
        if (isset($tr[$lang][$txt])) return fm_enc($tr[$lang][$txt]);
        else if (isset($tr['en'][$txt])) return fm_enc($tr['en'][$txt]);
        else return "$txt";
    }

?>
