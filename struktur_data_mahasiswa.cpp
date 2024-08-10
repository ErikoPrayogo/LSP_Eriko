#include <iostream>
#include <vector>
#include <string>

using namespace std;

struct Mahasiswa
{
    string npm;
    string nama;
    string tempat_lahir;
    string tanggal_lahir;
    string prodi;
};

vector<Mahasiswa> mahasiswaList;

void inputData()
{
    Mahasiswa m;
    cout << "Masukkan NPM: ";
    cin >> m.npm;
    cin.ignore();
    cout << "Masukkan Nama: ";
    getline(cin, m.nama);
    cout << "Masukkan Tempat Lahir: ";
    getline(cin, m.tempat_lahir);
    cout << "Masukkan Tanggal Lahir (dd-mm-yyyy): ";
    getline(cin, m.tanggal_lahir);
    cout << "Masukkan Prodi: ";
    getline(cin, m.prodi);
    mahasiswaList.push_back(m);
}

void tampilkanData()
{
    if (mahasiswaList.empty())
    {
        cout << "Data mahasiswa kosong.\n";
    }
    else
    {
        for (size_t i = 0; i < mahasiswaList.size(); ++i)
        {
            cout << "Index " << i << ":\n";
            cout << "NPM: " << mahasiswaList[i].npm << "\n";
            cout << "Nama: " << mahasiswaList[i].nama << "\n";
            cout << "Tempat Lahir: " << mahasiswaList[i].tempat_lahir << "\n";
            cout << "Tanggal Lahir: " << mahasiswaList[i].tanggal_lahir << "\n";
            cout << "Prodi: " << mahasiswaList[i].prodi << "\n";
            cout << "-------------------------\n";
        }
    }
}

void hapusData()
{
    if (mahasiswaList.empty())
    {
        cout << "Data mahasiswa kosong.\n";
        return;
    }
    size_t index;
    cout << "Masukkan index data yang akan dihapus: ";
    cin >> index;
    if (index < mahasiswaList.size())
    {
        mahasiswaList.erase(mahasiswaList.begin() + index);
        cout << "Data pada index " << index << " telah dihapus.\n";
    }
    else
    {
        cout << "Index tidak valid.\n";
    }
}

int main()
{
    int pilihan;
    do
    {
        cout << "Manajemen Data Mahasiswa\n";
        cout << "1. Input Data\n";
        cout << "2. Tampilkan Data\n";
        cout << "3. Hapus Data\n";
        cout << "4. Keluar\n";
        cout << "Pilih menu: ";
        cin >> pilihan;
        cin.ignore(); // Ignore the newline character after the number input
        switch (pilihan)
        {
        case 1:
            inputData();
            break;
        case 2:
            tampilkanData();
            break;
        case 3:
            hapusData();
            break;
        case 4:
            cout << "Keluar dari program.\n";
            break;
        default:
            cout << "Pilihan tidak valid.\n";
        }
    } while (pilihan != 4);
    return 0;
}
