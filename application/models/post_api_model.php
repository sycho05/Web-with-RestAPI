<?php
    class Post_Api_Model extends CI_Model{
        public function get_posts($slug = FALSE) {
            $api_url = ('http://localhost:8889/posts/all/');

            if ($slug) $api_url = ('http://localhost:8889/posts/get/' . $slug);

            $svcGet = curl_init($api_url);
            curl_setopt($svcGet, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($svcGet);
            curl_close($svcGet);
        
            $result = json_decode($response);

            return $result;
        }

        public function create_post() {
            //Menyiapkan Record baru ke dalam sebuah array
            $api_url="http://localhost:8889/posts/create/";
            $data = json_encode(array(
                'title' => $this->input->post('title'),
                'body' => $this->input->post('body'),
                'slug' => $this->input->post('title') . '-' . mdate('%Y%m%d%H%i%s', time()),
                'userid'=> $this->input->post('userid',true)   //membuat Slug Key dengan menambahkan tanggal dan waktu saat ini ke Title
            ));
            print_r($data);
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => $api_url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
            ));

            $response= json_decode(curl_exec($curl));

            curl_close($curl);
            // var_dump($response);
            // die();
            if ($response->status == 200) {
                $this->session->set_flashdata('success', "Respond Status: $response->status; Message: $response->message");
                return true;
            }
            else {
                $this->session->set_flashdata('error', "Respond Status: $response->status; Message: $response->message");
                return false;               
            }
        }
        public function delete_post($slug) {
            $api_url = "http://localhost:8889/posts/delete_slug/$slug";
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => $api_url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'DELETE',
                ),
            );
            
            $response= json_decode(curl_exec($curl));

            curl_close($curl);
            // var_dump($response);
            // die();
            if ($response->status == 200) {
                $this->session->set_flashdata('success', "Respond Status: $response->status; Message: $response->message");
                return true;
            }
            else {
                $this->session->set_flashdata('error', "Respond Status: $response->status; Message: $response->message");
                return false;               
            }
        }

        public function update_post() {
            $id = $this->input->post('id');
            $api_url = "http://localhost:8889/posts/edit/$id";

            $data = json_encode(array(
                'id' => (int)$this->input->post('id'),
                'slug' => $this->input->post('slug'),
                'title' => $this->input->post('title'),
                'body' => $this->input->post('body'),
                'created' => $this->input->post('created'),
                'userid'=> $this->input->post('userid',true),
            ));
            // die($api_url);

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => $api_url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'PUT',
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
            ));

            $response= json_decode(curl_exec($curl));

            curl_close($curl);
            // var_dump($response);
            // die();
            if ($response->status == 200) {
                $this->session->set_flashdata('success', "Respond Status: $response->status; Message: $response->message");
                return true;
            }
            else {
                $this->session->set_flashdata('error', "Respond Status: $response->status; Message: $response->message");
                return false;               
            }
        }
        public function get_posts_userid($userid = FALSE){
            $api_url =("http://localhost:8889/posts/get_userid/$userid");

            $svcGet = curl_init($api_url);
            curl_setopt($svcGet, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($svcGet);
            curl_close($svcGet);
        
            $result = json_decode($response);

            return $result;
    }
        

    }
