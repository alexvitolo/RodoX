# jcognos

[![Greenkeeper badge](https://badges.greenkeeper.io/CognosExt/jcognos.svg)](https://greenkeeper.io/)
[![CircleCI](https://circleci.com/gh/CognosExt/jcognos.svg?style=svg)](https://circleci.com/gh/CognosExt/jcognos)

Library that encapsulates the (undocumented) [IBM Cognos Analytics](https://www.ibm.com/products/cognos-analytics) REST API.

You can use this to write tests, external clients or build tools for your Cognos environment. As the Cognos API is not official, things might break (badly) after Cognos upgrades.

## Getting Started

```shell
npm install jcognos
```

Once the jcognos has been installed, you can include it in your projects as a CommonJS module

```javascript
require('jcognos');
```

or as an ES2016 module

```javascript
import getCognos from 'jcognos'
```

Then get going like:

```javascript
jcognos.getCognos('https://srv06.gologic.eu/ibmcognos/', true)
  .then(function(lcognos) {
    lcognos.login('username', 'password'); // Which also returns a promise
});
```

This version does not support XSRF headers. It is (temporarily) broken. To use the
module against Cognos Analytics 11.0.7 or later, follow these steps:

1.  Open the Windows Services window and stop the IBM Cognos service.
2.  Open the file installation_location\\wlp\\usr\\servers\\cognosserver\\bootstrap.properties.
3.  Add the following line:

    disableXSRFCheck=true

4.  Save the file.
5.  Restart the IBM Cognos service

# Usage

<!-- Generated by documentation.js. Update this documentation by updating the source code. -->

### Table of Contents

-   [Cognos](#cognos)
    -   [Parameters](#parameters)
    -   [login](#login)
        -   [Parameters](#parameters-1)
    -   [logoff](#logoff)
    -   [reset](#reset)
    -   [listRootFolder](#listrootfolder)
    -   [listFolderById](#listfolderbyid)
        -   [Parameters](#parameters-2)
    -   [addFolder](#addfolder)
        -   [Parameters](#parameters-3)
    -   [deleteFolder](#deletefolder)
        -   [Parameters](#parameters-4)
    -   [uploadExtension](#uploadextension)
        -   [Parameters](#parameters-5)
    -   [loggedin](#loggedin)
-   [getCognos](#getcognos)
    -   [Parameters](#parameters-6)
-   [CognosObject](#cognosobject)
    -   [Properties](#properties)
-   [cRequest](#crequest)
-   [isStandardBrowserEnv](#isstandardbrowserenv)
-   [isNode](#isnode)

## Cognos

Class that helps you connect with your inner Cognos. You can not create this class directly, use [getCognos](#getcognos) to
retrieve the Cognos instance.

### Parameters

-   `debug`  

### login

login - Logs into Cognos.

#### Parameters

-   `user` **[String](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/String)** Cognos username
-   `password` **[String](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/String)** Password

Returns **[Promise](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/Promise)** returns a promise.

### logoff

logoff - Logs off from Cognos.

Returns **[Promise](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/Promise)** returns a promise.

### reset

reset - Create a new connection

Returns **[Promise](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/Promise)** When resolved we are logged in

### listRootFolder

listRootFolder - Returns the Public Folders and the My Content

Returns **[Array](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/Array)&lt;[CognosObject](#cognosobject)>** Array of CognosObjects

### listFolderById

listFolderById - Lists the folder content by id

#### Parameters

-   `id` **[String](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/String)** Cognos Object id of the folder
-   `pattern` **[String](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/String)** = '_' Pattern like you would use when listing folders in your filesystem. eg. 'Sales_' (optional, default `'*'`)
-   `types` **[Array](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/Array)** = '['folder']' Types of Cognos objects to list. defaults to folders only. Other values could be 'report' (optional, default `['folder']`)

Returns **[Array](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/Array)&lt;[CognosObject](#cognosobject)>** List of sub-folders

### addFolder

addFolder - Creates a new folder

#### Parameters

-   `parentid` **[String](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/String)** Id of the parent folder of the new folder.
-   `name` **[String](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/String)** The name of the new folder

Returns **[CognosObject](#cognosobject)** The newly created folder

### deleteFolder

deleteFolder - Deletes a folder, its content and subfolders

#### Parameters

-   `id` **[String](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/String)** Id of the folder to be deleted
-   `force` **type** = true     Not sure, actually (optional, default `true`)
-   `recursive` **type** = true Will probably fail if folder contains children and set to false (optional, default `true`)

Returns **[Boolean](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/Boolean)** Returns true upon success

### uploadExtension

uploadExtension - Uploads zipfile containing Cognos Extension. Only supports updating an existing module.
This function is only supported by Node.js. In the browser this function returns false;

#### Parameters

-   `path` **[String](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/String)** Path to the .zip file
-   `name` **[String](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/String)** name of the module (as found in the spec.json)

Returns **[Object](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/Object)** Whatever JSON Cognos returns

### loggedin

Check to see of user is loggedin or not

Type: [Boolean](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/Boolean)

## getCognos

getCognos - Static function to get the Cognos Object. You can have only 1 Cognos object in your application
at any time.

### Parameters

-   `url` **[String](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/String)** The URL of your Cognos installation
-   `debug`   (optional, default `false`)

Returns **[Cognos](#cognos)** The Cognos object

## CognosObject

Type: [Object](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/Object)

### Properties

-   `id` **[String](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/String)** Cognos Object Id
-   `name` **[String](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/String)** Name of object.

## cRequest

Local Variable that holds the single CognosRequest instance

## isStandardBrowserEnv

Determine if we're running in a standard browser environment
returns {boolean}

## isNode

Determine if we're running in node
returns {boolean}
