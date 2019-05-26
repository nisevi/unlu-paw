<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Appointments;
use App\Helpers\Appointments\FilterParamsHelper;
use App\Helpers\Appointments\ImageHelper;
use App\Helpers\Appointments\ValidationsHelper;

/**
 * @property Appointments model
 */
class AppointmentsController extends Controller
{
    public function __construct()
    {
        $this->model = new Appointments();
    }

    /**
     * Show all appointments
     */
    public function index()
    {
        $appointments = $this->model->all();
        return view('appointments/index', compact('appointments'));
    }

    /**
     * Show a specific appointment
     * @param $id
     * @return
     * @throws \Exception
     */
    public function show()
    {
        $id = $_GET['id'];
        $appointment = $this->model->get($id);
        $date = explode(' ', $appointment['date']);
        $time = $date[1];
        $image_base_64 = base64_encode($appointment['image']);
        return view('appointments/show', compact('appointment', 'time', 'image_base_64'));
    }

    /**
     * Edit a specific appointment
     */
    public function edit()
    {
        $id = $_GET['id'];
        $appointment = $this->model->get($id);
        $date = explode(' ', $appointment['date']);
        $time = $date[1];
        $image_base_64 = base64_encode($appointment['image']);
        return view('appointments/edit', compact('appointment', 'time', 'image_base_64'));
    }

    /**
     * Delete a specific appointment
     */
    public function delete()
    {
        $id = $_POST['id'];
        $this->model->destroy($id);
        $appointments = $this->model->all();
        return view('appointments/index', compact('appointments'));
    }

    public function update()
    {
        $mandatory_params = FilterParamsHelper::mandatory_params($_POST);
        $valid_params = ValidationsHelper::valid_params($mandatory_params);
        if ($valid_params) {
            $id = $_POST['id'];

            $appointment_params = $this->filter_params($_POST, $_FILES);
            $this->model->update($id, $appointment_params);

            $appointment = $this->model->get($id);
            $date = explode(' ', $appointment['date']);
            $time = $date[1];
            $image_base_64 = base64_encode($appointment['image']);

            return view('appointments/show', compact('appointment', 'time', 'image_base_64'));
        }
        $errors = ValidationsHelper::param_errors_message($mandatory_params);
        return view('landing/index', compact('errors'));
    }

    public function save()
    {
        $mandatory_params = FilterParamsHelper::mandatory_params($_POST);
        $valid_params = ValidationsHelper::valid_params($mandatory_params);
        if ($valid_params) {
            $appointment_params = $this->filter_params($_POST, $_FILES);
            $this->model->insert($appointment_params);
            return redirect('appointments');
        }
        $errors = ValidationsHelper::param_errors_message($mandatory_params);
        return view('landing/index', compact('errors'));
    }

    private function filter_params($post, $files)
    {
        $filtered_params = [];
        foreach ($this->params($post, $files) as $key => $value) {
            if (isset($value) && $value != '') {
                $filtered_params[$key] = $value;
            }
        }
        return $filtered_params;
    }

    private function params($post, $files)
    {
        return [
            'name' => $post['name'],
            'email' => $post['email'],
            'phone' => $post['phone'],
            'birth_date' => $post['birth_date'],
            'image' => $this->image($files),
            'age' => intval($post['age']),
            'shoes_size' => intval($post['shoes_size']),
            'height' => intval($post['height']),
            'hair_color' => $post['hair_color'],
            'date' => date($post['date'] . ' ' . $post['time'])
        ];
    }

    private function image($files)
    {
        $image_size = ImageHelper::image_size($files);
        $image_basename = ImageHelper::image_basename($files);
        $image_extension = ImageHelper::image_extension($image_basename);
        $valid_image = ImageHelper::valid_image($image_extension, $image_basename, $image_size);
        if ($valid_image) {
            return ImageHelper::image_data($files);
        }
        return NULL;
    }
}
