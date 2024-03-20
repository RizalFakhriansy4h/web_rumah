<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{

    protected $home_carrousel = [
        [
            "title" => "Gading Nias Residence",
            "deskripsi" => "Kelapa Gading, Jakarta Utara2 KT • 2 KM • LB 45m2 • LT 110m2 • SHM",
            "gambar" => "hero2.jpg",
        ],
        [
            "title" => "Menteng Park Apartment",
            "deskripsi" => "Menteng, Jakarta Pusat3 KT • 3 KM • LB 70m2 • LT 150m2 • PPJB",
            "gambar" => "hero3.jpg"
        ]
    ];
    protected $home_testimoni = [
        [
            "nama" => "John Doe",
            "komentar" => "Gading Nias Residence adalah tempat yang luar biasa! Sangat nyaman dan bersih, saya sangat merekomendasikan untuk semua orang.",
            "gambar" => "team1.jpg",
        ],
        [
            "nama" => "Jane Smith",
            "komentar" => "Permata Hijau Mansion adalah rumah impian saya! Lokasinya sangat strategis dan fasilitasnya lengkap.",
            "gambar" => "team2.jpg",
        ],
        [
            "nama" => "David Johnson",
            "komentar" => "Menteng Park Apartment adalah tempat tinggal yang sempurna bagi keluarga kami. Lingkungannya aman dan nyaman.",
            "gambar" => "team3.jpg",
        ]
    ];    
    
    protected $home_card = [
        [
            "title" => "Putri Hijau Mansion",
            "daerah" => "Daerah Khusus Ibu Kota Jakarta",
            "gambar" => "items1.jpg"
        ],
        [
            "title" => "Gading Nias Residence",
            "daerah" => "Kelapa Gading, Jakarta Utara",
            "gambar" => "items2.jpg"
        ],
        [
            "title" => "Menteng Park Apartment",
            "daerah" => "Menteng, Jakarta Pusat",
            "gambar" => "items3.jpg"
        ],
        [
            "title" => "Kemang Village Residence",
            "daerah" => "Kemang, Jakarta Selatan",
            "gambar" => "items4.jpg"
        ],
        [
            "title" => "Pluit Sea View Apartment",
            "daerah" => "Pluit, Jakarta Utara",
            "gambar" => "items5.jpg"
        ]
    ];
    
    protected $marketing_team = [
        [
            "nama" => "Mutiara Kezia Tembesi",
            "link" => "https://www.instagram.com/keziamt_/",
            "jobdesk" => "Digital Marketing",
            "gambar" => "mutiara.jpg"
        ],
        [
            "nama" => "Silvana Zalista Nuraini Ghoyali",
            "link" => "https://www.instagram.com/silvanazlt?igsh=MXI0N3o0YTE2OHE4cw",
            "jobdesk" => "Digital Marketing",
            "gambar" => "silvana.jpg"
        ],
        [
            "nama" => "Dwi Oktavia",
            "link" => "https://www.instagram.com/dwioktvia?igsh=Mjd3aWN6Y3FnbHlv",
            "jobdesk" => "Digital Marketing",
            "gambar" => "okta.jpg"
        ]
    ];
    protected $development_team = [
        [
            "nama" => "Jean Paulus Tabaya",
            "link" => "https://www.instagram.com/jeann_pt?igsh=Y3Y3cWM4b294ZWx3",
            "jobdesk" => "UI/UX",
            "gambar" => "jean.jpg"
        ],
        [
            "nama" => "Zahra Nada Audia",
            "link" => "https://www.instagram.com/auzhra.na?igsh=MWk3YTBmaDdyZTJ6MQ",
            "jobdesk" => "UI/UX",
            "gambar" => "zahra.jpg"
        ],
        [
            "nama" => "Ricky Aulia Widiansyah",
            "link" => "https://www.instagram.com/rickywidiansyah?igsh=cmFoZ3hqNnV4OWM2",
            "jobdesk" => "UI/UX",
            "gambar" => "iky.jpg"
        ],
        [
            "nama" => "Nabila Safira Sibuea",
            "link" => "https://www.instagram.com/nbilsfr?igsh=aWZya2JnNTJqMm9h",
            "jobdesk" => "Front-end",
            "gambar" => "nabila.jpg"
        ],
        [
            "nama" => "Rizalludin Fakhriansyah Nugroho",
            "link" => "https://www.instagram.com/rizalfakhri00/",
            "jobdesk" => "Back-end",
            "gambar" => "rizal.jpg"
        ]
    ];

    public function index(): string
    {
        $email = session('logged');
        $userModel = new UserModel();

        if ($email){
            $data['nama'] = $userModel->where('email', $email)->first()['nama'];
        }

        $data['title'] = "Beranda";
        $data['data_carrousel'] = $this->home_carrousel;
        $data['home_card'] = $this->home_card;
        $data['testi'] = $this->home_testimoni;

        return view('home', $data);
    }
    
    public function about(): string
    {


        $data['title'] = "Tentang Kami";
        
        
        $data['marketing'] = $this->marketing_team;
        $data['webdev'] = $this->development_team;

        return view('about', $data);
    }
    
    public function property(): string
    {
        $data['title'] = "Asuransi";
        return view('asuransi', $data);
    }
    
    public function contact(): string
    {
        $email = session('logged');
        $userModel = new UserModel();

        if ($email){
            $data['nama'] = $userModel->where('email', $email)->first()['nama'];
            $data["email"] = $email;
        }
        $data['title'] = "Kontak";
        return view('contact', $data);
    }
    public function kirimEmail()
{
    $email = \Config\Services::email();

    $namaPost = $this->request->getPost('nama');
    $emailPost = $this->request->getPost('email');
    $subjectPost = $this->request->getPost('subject');
    $messagePost = $this->request->getPost('message');

    $email->setTo('fakhriansyahnugroho007@gmail.com');
    $email->setFrom($emailPost, $namaPost);
    $email->setSubject($subjectPost);
    $email->setMessage($messagePost);

    if ($email->send()) {
        session()->setFlashdata('alert', '<div class="alert alert-success" role="alert">Email Terkirim</div>');
        return redirect()->to('/contact');
    } else {
        $data = $email->printDebugger(['headers']);
        print_r($data);
    }
}

}

