<?php

class Classes extends Controller {

    public function __construct() {
        $this->posts = $this->model('_classes');
    }

    public function index() {

        $data = [

            'classes' => $this->posts->getAllPosts()

        ];

        $this->view('classes/index', $data);

    }
    public function classtwo() {

      $data = [

          'programming' => $this->posts->progPosts()

      ];

      $this->view('classes/classtwo', $data);

  }
  public function classone() {

    $data = [

        'system' => $this->posts->sysPosts()

    ];

    $this->view('classes/classone', $data);

}
}

?>