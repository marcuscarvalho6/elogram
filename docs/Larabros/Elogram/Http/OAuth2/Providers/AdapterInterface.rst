------------------------------------------------------------
Larabros\\Elogram\\Http\\OAuth2\\Providers\\AdapterInterface
------------------------------------------------------------

.. php:namespace: Larabros\\Elogram\\Http\\OAuth2\\Providers

.. php:interface:: AdapterInterface

    An interface for OAuth2 providers.

    .. php:method:: getAuthorizationUrl($options = [])

        Builds the authorization URL.

        :param $options:
        :returns: string Authorization URL

    .. php:method:: getAccessToken($grant, $options = [])

        Requests an access token using a specified grant and option set.

        :param $grant:
        :param $options:
        :returns: AccessToken
