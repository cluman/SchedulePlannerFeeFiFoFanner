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
    }
    return word;
}

int main()
{
    file.open ("newfile.txt");
    file.open ("file.txt");
    string word;
//    char x ;
    word.clear();

    while ( ! file.eof() )
    {
/*        x = file.get();
        word = word + x;
        
        while ( x != ' ' )
        {
            x = file.get();
            word = word + x;
        }
*/
        word = gName();

            cout<< word <<endl;


        if (newfile.is_open())
        {
            newfile << word;
        }
        else cout << "Unable to open file";
        
        word.clear();
    }
    
    file.close();
    newfile.close();
   
   return 0;
}
