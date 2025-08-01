<?php
return [
    /*
    |--------------------------------------------------------------------------
    | CAS Hostname
    |--------------------------------------------------------------------------
    | Example: 'cas.myuniv.edu'.
    */
    'cas_hostname' => env('CAS_HOSTNAME', 'idp-stg.login.iu.edu/idp/profile'),

    /*
    |--------------------------------------------------------------------------
    | CAS Authorized Hosts
    |--------------------------------------------------------------------------
    | Example: 'cas.myuniv.edu'.  This is used when SAML is active and is
    | recommended for protecting against DOS attacks.  If using load
    | balanced hosts, then separate each with a comma.
    */
    'cas_real_hosts' => env('CAS_REAL_HOSTS', 'idp-stg.login.iu.edu/idp/profile'),


    /*
    |--------------------------------------------------------------------------
    | Customize CAS Session Cookie Name
    |--------------------------------------------------------------------------
    */
    'cas_session_name' => env('CAS_SESSION_NAME', 'CASAuth'),

    /*
    |--------------------------------------------------------------------------
    | Laravel has it's own authentication sessions. Unless you want phpCAS
    | to manage the session, leave this set to false.  Note that the
    | middleware and redirect classes will be handling removal
    | of the Laravel sessions when this is set to false.
    |--------------------------------------------------------------------------
    */
    'cas_control_session' => env('CAS_CONTROL_SESSIONS', false),

    /*
    |--------------------------------------------------------------------------
    | Enable using this as a cas proxy
    |--------------------------------------------------------------------------
    */
    'cas_proxy' => env('CAS_PROXY', false),

    /*
    |--------------------------------------------------------------------------
    | Cas Port
    |--------------------------------------------------------------------------
    | Usually 443
    */
    'cas_port' => env('CAS_PORT', 443),

    /*
    |--------------------------------------------------------------------------
    | CAS URI
    |--------------------------------------------------------------------------
    | Sometimes is /cas
    */
    'cas_uri' => env('CAS_URI', '/cas'),

    /*
    |--------------------------------------------------------------------------
    | Client service: host, port, protocol.
    |--------------------------------------------------------------------------
    | Example: 'http://localhost', 'https://example.com:8888'
    */
    'cas_client_service' => env('CAS_CLIENT_SERVICE', 'https://orcid-dev.dlib.indiana.edu'),


    /*
    |--------------------------------------------------------------------------
    | CAS Validation
    |--------------------------------------------------------------------------
    | CAS server SSL validation: 'self' for self-signed certificate, 'ca' for
    | certificate from a CA, empty for no SSL validation.
    |
    | VALIDATING THE CAS SERVER IS CRUCIAL TO THE SECURITY OF THE CAS PROTOCOL
    */
    'cas_validation' => env('CAS_VALIDATION', ''),

    /*
    |--------------------------------------------------------------------------
    | CA Certificate
    |--------------------------------------------------------------------------
    | Path to the CA certificate file.  For production use set
    | the CA certificate that is the issuer of the cert
    */
    'cas_cert' => env('CAS_CERT', ''),

    /*
    |--------------------------------------------------------------------------
    | CN Validation (if you are using CA certs)
    |--------------------------------------------------------------------------
    | If for some reason you want to disable validating the certificate
    | intermediaries, here is where you can.  Recommended to leave
    | this set with default (true).
    */
    'cas_validate_cn' => env('CAS_VALIDATE_CN', true),

    /*
    |--------------------------------------------------------------------------
    | CAS Login URI
    |--------------------------------------------------------------------------
    | Empty is fine
    */
    'cas_login_url' => env('CAS_LOGIN_URL', ''),

    /*
    |--------------------------------------------------------------------------
    | CAS Logout URI
    |--------------------------------------------------------------------------
    */
    'cas_logout_url' => env('CAS_LOGOUT_URL', 'https://orcid-dev.dlib.indiana.edu/cas/logout'),

    /*
    |--------------------------------------------------------------------------
    | CAS Logout Redirect Services
    |--------------------------------------------------------------------------
    | If your server supports redirection services, enter the redirect url
    | in this section.  If left blank, it will default to disabled.
    */
    'cas_logout_redirect' => env('CAS_LOGOUT_REDIRECT', ''),

    /*
    |--------------------------------------------------------------------------
    | CAS Successful Logon Redirection Url
    |--------------------------------------------------------------------------
    | By default, CAS will assume that the user should be redirected to the
    | page in which the call was initiated.  You can override this method
    | and force the user to be redirected to a specific URL here.
    */
    'cas_redirect_path' => env('CAS_REDIRECT_PATH', ''),

    /*
    |--------------------------------------------------------------------------
    | CAS Supports SAML 1.1, allowing you to retrieve more than just the
    | user identifier.  If your CAS authentication service supports
    | this feature, you may be able to retrieve user meta data.
    |--------------------------------------------------------------------------
    */
    'cas_enable_saml' => env('CAS_ENABLE_SAML', true),

    /*
    |--------------------------------------------------------------------------
    | CAS will support version 1.0, 2.0, 3.0 of the protocol.  It is recommended
    | to use version 2.0, 3.0, or SAML 1.1.  If you enable SAML, then that
    | will override this configuration.
    |--------------------------------------------------------------------------
    */
    'cas_version' => env('CAS_VERSION', "2.0"),

    /*
    |--------------------------------------------------------------------------
    | Sets the log method for phpCAS. phpCAS logs are verbose, multi-line, INFO
    | log entries. Consider the implications when choosing a log approach.
    |
    | null (default) = no logging
    | laravel = use the Laravel MonoLog instance
    | /path/to/file = create a new log at the given file path
    |--------------------------------------------------------------------------
    */
    'cas_log' => env('CAS_LOG', null),

    /*
    |--------------------------------------------------------------------------
    | Enable Verbose error messages. Not recommended for production.
    | true | false
    |--------------------------------------------------------------------------
    */
    'cas_verbose_errors' => env('CAS_VERBOSE_ERRORS', true),

    /*
    |--------------------------------------------------------------------------
    | This will cause CAS to skip authentication and assume this user id.
    | This should only be used for developmental purposes.  getAttributes()
    | will return null in this condition.
     */
    'cas_masquerade' => env('CAS_MASQUERADE', ''),

    /*
    |--------------------------------------------------------------------------
    | The value to set in the Domain field on cookies.
     */
    'cas_session_domain' => env('APP_DOMAIN', ''),

    /*
    |--------------------------------------------------------------------------
    | Whether to add the Secure flag to cookies.
     */
    'cas_session_secure' => env('HTTPS_ONLY_COOKIES', false),
];
