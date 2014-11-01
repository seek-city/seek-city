<?php
class AuthController extends Controller
{

    public function loginWithFacebook()
    {

        // get data from input
        $code = Input::get( 'code' );

        // get fb service
        $fb = OAuth::consumer( 'Facebook', "http://seekcity.dev/users/login" );

        // check if code is valid

        // if code is provided get user data and sign in
        if ( !empty( $code ) ) {

            // This was a callback request from facebook, get the token
            $token = $fb->requestAccessToken( $code );

            // Send a request with it
            $result = json_decode( $fb->request( '/me' ), true );

            $message = 'Your unique facebook user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
            echo $message. "<br/>";

            //Var_dump
            //display whole array().
            dd($result);

        }
        // if not ask for permission first
        else {
            // // get fb authorization
            $url = $fb->getAuthorizationUri();

            // // return to facebook login url
            return Redirect::to( (string)$url );
             dd($result);
        }

    }

    public function loginWithGoogle()
    {
        // get data from input
        $code = Input::get('code');

        // get google service
        $googleService = Artdarek\OAuth\Facade\OAuth::consumer("Google");

        if (!empty($code)) {

            // This was a callback request from google, get the token
            $token = $googleService->requestAccessToken($code);

            // Send a request with it
            $result = json_decode($googleService->request('https://www.googleapis.com/oauth2/v1/userinfo'), true);

            $user = User::whereEmail($result['email'])->first(['id']);

            if (empty($user)) {
                $data = new User;
                $data->Username = $result['name'];
                $data->email = $result['email'];
                $data->first_name = $result['given_name'];
                $data->last_name = $result['family_name'];
                $data->save();
            }
            Auth::login($user);
            return Redirect::to('/');

        }
        // if not ask for permission first
        else {
            // get googleService authorization
            $url = $googleService->getAuthorizationUri();
            // return to google login url
            return Redirect::to((string) $url);
        }
    }
}

