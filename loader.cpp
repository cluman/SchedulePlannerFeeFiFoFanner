#include <iostream>
#include <fstream>

using namespace std;

    ifstream file;
    ofstream newfile;


string gName ()
{
        string word;
    char x ;
    //cout << word << ": test: gName " << endl;
    
    x = file.get();
    word = word + x;
    
    while ( x != 9)
    {
        x = file.get();
            
        word = word + x;
        
        if (file.eof())
        {   return word;    }
    }
    return word;
}

int main()
{
    newfile.open ("newfile.txt");
    file.open ("file.txt");
    string word;
    string row;
    row.clear();
    word.clear();

    while ( !file.eof() )
    {

        word = gName();

            cout<< word <<endl;

        row = row + word;

        cout << "test: " << word << endl;
        if (newfile.is_open())
        {
            newfile << row << endl;
        
        }
        else cout << "Unable to open file";
        
        word.clear();
    }
    
    file.close();
    newfile.close();
   
   return 0;
}
