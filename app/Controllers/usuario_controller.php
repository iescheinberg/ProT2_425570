<?php
namespace App\Controllers;
use App\Models\usuario_Model;
use CodeIgniter\Controller;

class usuario_controller extends Controller {
    public function __construct(){
        helper(['form', 'url']);
    }


    public function create() {
        $dato['titulo'] = 'Registro';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }

    public function formValidation()
{
    $input = $this->validate([
        'nombre' => [
            'rules' => 'required|min_length[3]',
            'errors' => [
                'required' => 'El nombre es obligatorio.',
                'min_length' => 'El nombre debe tener al menos 3 caracteres.'
            ]
        ],
        'apellido' => [
            'rules' => 'required|min_length[3]|max_length[25]',
            'errors' => [
                'required' => 'El apellido es obligatorio.',
                'min_length' => 'El apellido debe tener al menos 3 caracteres.',
                'max_length' => 'El apellido no puede superar los 25 caracteres.'
            ]
        ],
        'usuario' => [
            'rules' => 'required|min_length[4]',
            'errors' => [
                'required' => 'El nombre de usuario es obligatorio.',
                'min_length' => 'Debe tener al menos 4 caracteres.'
            ]
        ],
        'email' => [
            'rules' => 'required|valid_email|is_unique[usuarios.email]',
            'errors' => [
                'required' => 'El correo electrónico es obligatorio.',
                'valid_email' => 'Debe ser un correo válido.',
                'is_unique' => 'Este correo ya está registrado.'
            ]
        ],
        'pass' => [
            'rules' => 'required|min_length[6]|regex_match[/(?=.*[a-z])(?=.*[A-Z]).{6,}/]',
            'errors' => [
                'required' => 'La contraseña es obligatoria.',
                'min_length' => 'Debe tener al menos 6 caracteres.',
                'regex_match' => 'Debe contener al menos una mayúscula y una minúscula.'
            ]
        ]
    ]);

    $formModel = new usuario_Model();

    if (!$input) {
        $data = [
        'titulo' => 'Registro',
        'validation' => $this->validator
    ];
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro', $data);
        echo view('front/footer_view');
    } else {
        $formModel->save([
            'nombre' => $this->request->getVar('nombre'),
            'apellido' => $this->request->getVar('apellido'),
            'usuario' => $this->request->getVar('usuario'),
            'email' => $this->request->getVar('email'),
            'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
        ]);

        session()->setFlashdata('success', 'Usuario registrado con éxito');
        return redirect()->route('login');
    }
}

    
    public function verificar()
    {
        $usuarioIngresado = $this->request->getVar('usuario');
        $pass = $this->request->getVar('pass');

        $modelo = new usuario_Model();
        $usuario = $modelo->where('usuario', $usuarioIngresado)->first();

        if ($usuario && password_verify($pass, $usuario['pass'])) {
            session()->set('usuario', $usuario['usuario']);
            return redirect()->route('principal');
        } else {
            session()-> setFlashdata('error', 'Email o contraseña incorrectos');
            return redirect()->route('login');
        }

    }

    public function logout()
    {
        session()->destroy();
        return redirect()->route('login');
    }

}