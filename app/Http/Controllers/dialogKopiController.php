<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dialogKopiController extends Controller
{
    public function index()
    {
        $kedai = [
            'nama' => 'dialog kopi',
            'tagline' => 'Secangkir kopi hangat untuk menutup harimu.',
            'jam_buka' => 'Setiap hari, 10.00–22.00',
            'alamat' => 'Jl. Hasanudin No. 8, Timika',
            'whatsapp' => '085320110246', 
            'instagram' => '@dialog.coffee_',
        ];

        $menus = [
            // Kategori: Kopi
            [
                'id' => 1,
                'nama' => 'Cold Brew Dialog',
                'kategori' => 'Kopi',
                'harga' => 26000,
                'deskripsi' => 'Kopi diseduh dingin 18 jam, segar dan tidak asam. Signature sore hari.',
                'andalan' => true,
                'habis' => false,
                'varian' => [],
                'gambar' => 'https://images.unsplash.com/photo-1517701550927-30cf4ba1dba5?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'id' => 2,
                'nama' => 'Cappuccino',
                'kategori' => 'Kopi',
                'harga' => 24000,
                'deskripsi' => 'Espresso, susu, dan foam tebal. Disajikan panas dengan latte art.',
                'andalan' => false,
                'habis' => false,
                'varian' => [],
                'gambar' => 'https://images.unsplash.com/photo-1534778101976-62847782c213?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'id' => 3,
                'nama' => 'Caffe Latte',
                'kategori' => 'Kopi',
                'harga' => 25000,
                'deskripsi' => 'Espresso dengan susu steamed yang lembut.',
                'andalan' => false,
                'habis' => false,
                'varian' => ['Hot', 'Iced'],
                'gambar' => 'https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'id' => 4,
                'nama' => 'Kopi Susu Aren',
                'kategori' => 'Kopi',
                'harga' => 18000,
                'deskripsi' => 'Espresso double shot, susu segar, dan gula aren asli. Signature kami sejak hari pertama.',
                'andalan' => true,
                'habis' => false,
                'varian' => ['Hot', 'Iced'],
                'gambar' => 'https://images.unsplash.com/photo-1461023058943-07fcbe16d735?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'id' => 5,
                'nama' => 'Es Latte Karamel',
                'kategori' => 'Kopi',
                'harga' => 24000,
                'deskripsi' => 'Espresso, susu segar, dan saus karamel buatan sendiri di atas es.',
                'andalan' => false,
                'habis' => false,
                'varian' => [],
                'gambar' => 'https://images.unsplash.com/photo-1485808191679-5f86510681a2?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'id' => 6,
                'nama' => 'Americano',
                'kategori' => 'Kopi',
                'harga' => 15000,
                'deskripsi' => 'Espresso biji arabika Gayo dengan air — pahit yang jujur.',
                'andalan' => false,
                'habis' => false,
                'varian' => ['Hot', 'Iced'],
                'gambar' => 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&w=600&q=80',
            ],

            // Kategori: Non-Kopi
            [
                'id' => 7,
                'nama' => 'Coklat Hangat',
                'kategori' => 'Non-Kopi',
                'harga' => 20000,
                'deskripsi' => 'Dark chocolate asli dengan susu.',
                'andalan' => false,
                'habis' => false,
                'varian' => ['Hot', 'Iced'],
                'gambar' => 'https://images.unsplash.com/photo-1542990253-0d0f5be5f0ed?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'id' => 8,
                'nama' => 'Matcha Susu Layer',
                'kategori' => 'Non-Kopi',
                'harga' => 27000,
                'deskripsi' => 'Susu dingin dengan lapisan matcha di atasnya — aduk sebelum diminum.',
                'andalan' => false,
                'habis' => true,
                'varian' => [],
                'gambar' => 'https://images.unsplash.com/photo-1515823064-d6e0c04616a7?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'id' => 9,
                'nama' => 'Matcha Latte',
                'kategori' => 'Non-Kopi',
                'harga' => 25000,
                'deskripsi' => 'Matcha Jepang dengan susu segar, manisnya pas.',
                'andalan' => false,
                'habis' => false,
                'varian' => ['Hot', 'Iced'],
                'gambar' => 'https://images.unsplash.com/photo-1536256263959-770b48d82b0a?auto=format&fit=crop&w=600&q=80',
            ],

            // Kategori: Pastry & Snack
            [
                'id' => 10,
                'nama' => 'Cookies Coklat',
                'kategori' => 'Pastry & Snack',
                'harga' => 12000,
                'deskripsi' => 'Soft cookies dengan dark chocolate chunk yang lumer.',
                'andalan' => false,
                'habis' => false,
                'varian' => [],
                'gambar' => 'https://images.unsplash.com/photo-1499636136210-6f4ee915583e?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'id' => 11,
                'nama' => 'Donat Gula',
                'kategori' => 'Pastry & Snack',
                'harga' => 8000,
                'deskripsi' => 'Donat empuk taburan gula halus — teman terbaik kopi sore.',
                'andalan' => false,
                'habis' => false,
                'varian' => [],
                'gambar' => 'https://images.unsplash.com/photo-1551024601-bec78aea704b?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'id' => 12,
                'nama' => 'Croissant Butter',
                'kategori' => 'Pastry & Snack',
                'harga' => 18000,
                'deskripsi' => 'Croissant 27 lapis dengan butter premium, dipanggang fresh tiap pagi. Best seller pagi hari.',
                'andalan' => true,
                'habis' => false,
                'varian' => [],
                'gambar' => 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=600&q=80',
            ],
        ];

       $galeri = [
            'data:image/webp;base64,UklGRhQIAABXRUJQVlA4IAgIAAAwKwCdASqYAJQAPoE+mkolIyIho5XaQKAQCWlu4XHg9exL/lfbB/cPx88+/HF5n9qPNV8TPRvmZ/F/tJ97/Mz2D71fhL/E+oF+N/zb/Aflp/R+HFrv/o/UC9UPn3+T+3n0Fv5D0J+rn+P9wD+X/1P/QfbL7R3hQeG+wB/Pv6v/wvuk+lX+b/5/+U87P51/if/B/kfgH/mH9d/5frneyT90PZg/a4jNhjV5vd/vHDGrzeLNkrU1tuexX//pf431k70lyeCfm81GdWMzq1f4a4abCeLj0n3XF9RVAa6xpqvMUY2uxfkZnNWMTkhYHnSMSKlTeOGWM4+lBhzyUG9j2O2wMzi4wikoW3i6R6B5b8CVdkD1uP5QQkX4k3Tj7oUHFHM+uPguwpZnRkewIrSw/6leHhwPVpEgGi/tC4I/+Eqbia49jhEmPd8KUFvi3EgbTEhXaA8GNJCU9GvWMThZtXm93iAA/v9PBSgcOKIiG1mY5hkSFvqi+HeBQLohYICfyieX3nQebTfhZwOl+6Fr0yOvix/9WDLk5ycE7sS283BvJmwsq9aVlMYMxvmLGtiXsajcnzX4BMVTV7W/pbA+EuBfZLx021FUn9etBrJNbPzQNbo7bs/5btJPjBMLnjvmk+wiBgn5T/+m5qcOqIanjkzcfrGlH/vD8UI/qTuRzwHwGUIF1KrGYc5ioBRQ6KC99ykAEuYnNhRGTkTms0pcOakO8xaY+XuiWajLwwjsqc5w7sThs/zdKdj8PRoQ9GmxwbUaDM0ohYpNZu6US+SoffGbHjp6tDqOqppev/IYt/9CfQRxtpUUkiF3I8gLdyV3QA7WiBWVFO6FSKqo6Ap0zWEjjgeQKSgAQnlztEMvopvWg8Wu4ek5dn7oHEms42+ZhkexPYvAy0aKflMn23BqMjI/A4hgjQhbLft/TgO7AaG9by76ANveLYBnCOJIeVB5OiwHm3kHBTggyLSKexyAUzc8mRzKyFVvL1eANPuSRrBFcfVPV3ZCwpVe51Ke9jWPiVkun5y+I4LPjJLzFtZpNl93A3+STHDs1sq8EyYln3OQWvsvgWgHcPv6wzlKbJNW9CAlJ4x8cnVZdkciMIbObEbI/JPzEuEXDXuhTmDCGdYogJxNfKXT87OCR75TOpHA0kNJKLPjEZZbZRkWHTC/uuov1u/pEsUXCzoz/6Iurl7ZrItfrtUAFVte8F/jTMRgH+9nVrwRdonO6n7Dwme8SEpW5piLTchAK7tANNFcweahB5s3n5cFkYsaCop26tfWJHQeu3Dul9K93E7Z2nsDTbNPHjHRrVZFuxYtq5CzimYQw3CmdS9LU7DOdvmgTh5szEqxMrERodDU5hEkHTIX69o1Ryn4QaA3ocKjWaSHpML26hpGkqo8hflD/9L7FuDm3vmI6OcIwZGoFPSnaNOcpdE/KO0ZHSWqA4ZMUfqNfd63EN51/PPRgRJPpj+bnFRtBDlcz/H+YDCBljFIWqSP0u8AJKvKmW3W8MZgdVR64mup66z8bShzn2QdXY3MNVCNBOxpqww7HA22+q4eV/pZnfG2mPMovApj66H2nIzOp4PvYCJUxsasuh3su+vywJoZsD4lfmDDgIMDnAHQCF6fiUM8Jj6nrLaDRaYe1MH+MWOJTrwpsiNZ7oEFJriVymA3W374EajR75L8jI2Rue8Vz5lErAcrSHiweC7EuSudpB5lPE0SjO27n53LmshjpfOuRUSSlEq4gBGn5vRURpTgOMEpFsRzII+coOQH3SzIwYzHeNacEgX3D1Hs+gHYwPJMA8ZPLd4e2HVddlgPPfj8f+PULAigpu2E7UIGWhae10t7m4J4u2S0xqNOcEl2Qsen0zHqnniOt2X9VWcMkWKjli/ncD9rhHW8ecDmMoGvvsxFgpwntM0doybA/yRejbO8RaM/pHGz3/WQ2kSdfbPyKS/NLy671Di/EPjloJSzeLINqRxnDJ59aVTHVYlbcKBILfzQrhHigX08lIrPo5jlSU8/kxwHmbg7WZm4sTNswcNfFrf7+OSX7Up8oYx5nk20gG5fvIN4KPNLKaMI1WS4UeDiR3Pzhtj69G7TRXji6mu8Qb3L+G13zLpMV//Q/Pe0s7Qcai6KvxFqZqL0K6Px9jp/c4uyKnXs7E3IOIV/fkIO7NreLLtRxfJ2ieOZy/pMIEfj8mT8RGd8VP6MDl9r/2rNb7uupVECZr7ujuB1omQGaLr6odeRzc7dpF2lNKA+nwpqKE6jx97kiSjEcj6aUT6n39al/pd0fQnXLfJqyUkd9cEMEvSUQmtLAZCf+zilAUC1WZ60P+K1pqUWvWhwP7+7eQL49kgyr5DPeb30qvlPtZ8egybapP1hFfyvp4Nda4oxHRlF7vLF/DCZsJ8imRRqG4b/Elr8YT8vQXfcpw63xDWAL3sdWYxmIvjT6jtIezTmpmiien5hh0W7mahkzSHxurg4OIHAp/H936RE15+QIxiQBzIxXazo4zI+eGATSDaDRdpzZjKIIdpA6Vv6YFqbRmLmp64IAzHP5TUnRML9L+FE7bVq1uI6YqH6owu59DeF3oFFWBV279cQp1FU3DuzC1CvWRGAgkqCKM4kOgY4NVeT6ArJpcFaIG15eFVfl0fOgKswf1pebICrbcP4mrUM1CCRhb60a9zfXy7gpL9piwVLacG2KSXI2rK5Y2xv/DVzxjaQ4sXnUN1DR8wYn3sxTzDYANaYV1wcN8OqocUr2lZPzkAAAAAA',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuztZI_k1CYETRNN_DFTcxc8p6ODM9Z_hyS2Mu3aJQTzUjYKTnmO9b6fji&s=10',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMLquyH1pFL5Z3WaLSs_5nK1LmaTZuSOAhXCtJ9zyxxNFURMn3A7wxGoQ&s=10',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNh9fIKxLQuqbTjPlpyQzQXU4RmPYr8PQpDWchetM-Kjf-ZIKKLwMIes8&s=10',
        ];

        return view('dialog-kopi', compact('kedai', 'menus', 'galeri'));
    }
}
