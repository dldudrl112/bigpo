<?php
class Log
{
    function checkPermission()
    {
        $CI = &get_instance();
        $CI->load->library('session');
        $CI->load->helper('url');



        if(isset($CI->allow) && (is_array($CI->allow) === false OR in_array($CI->router->method, $CI->allow) === false))
        {
            // $CI->allow 는 배열로, 추후 로그인 없이 사용 가능한 것들을 저장할때 사용합니다.
            // 가령 로그인 화면이나 문의화면 같이 비로그인으로 열어줄 것들을 넣어주게 됩니다.
            if (strpos(current_url(), 'login_form') ===false) // 로그인 여부를 세션을 이용해 체크한다.
            {

                if($CI->uri->segment(1) == 'kyowon' && $CI->uri->segment(2) == 'syrup') {

                    if( $CI->session->userdata('kyowon_syrup_id') != 'kyowon_syrup') {
                        redirect('/kyowon/syrup/admin/main/'); // 로그인창으로 강제 이동
                    }
                } elseif($CI->uri->segment(1) == 'kyowon' ) {
                    if( $CI->session->userdata('kyowon_id') != 'kyowon') {
                        redirect('/kyowon/admin/main/'); // 로그인창으로 강제 이동
                    }
                } elseif($CI->uri->segment(1) == 'hyowon' && $CI->uri->segment(2) == 'syrup') {

                    if( $CI->session->userdata('hyowon_syrup_id') != 'hyowon_syrup') {
                        redirect('/hyowon/syrup/admin/main/'); // 로그인창으로 강제 이동
                    }
                } elseif($CI->uri->segment(1) == 'hyowon' ) {
                    if( $CI->session->userdata('hyowon_id') != 'hyowon') {
                        redirect('/hyowon/admin/main/'); // 로그인창으로 강제 이동
                    }
                }

            }

            $segment_state = 0;




        }
    }
}
