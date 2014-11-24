/* 
 * File:   ScheduleMaker.cpp
 * Author: Chris
 *
 * Created on November 12, 2014, 4:42 PM
 */

#include <cstdlib>
#include <iostream>
#include <string>
#include <vector>
#include <algorithm>
#include <time.h>
#include <fstream>

using namespace std;
int tokenSize;
   
class Course{
private:
    string courseID, title, instructor, location, dayOfWeek, timeStart, timeEnd, semester;
    int hours, classNumber;

public:
    // constructors
    Course(){ semester = ""; courseID = ""; title = ""; instructor = "";
        location = ""; hours = 0; classNumber = 0; dayOfWeek = "";
        timeStart = "", timeEnd = ""; 
    }
    Course(string semester, string ID, string className, string prof, string loc, 
           int hrs, int classNum, string day, string timeS, string timeE){
        courseID = ID; title = className; instructor = prof; location = loc; 
        hours = hrs; classNumber = classNum; dayOfWeek = day;
        timeStart = timeS, timeEnd = timeE;
    }
    
    // getters and setters
    string getID(){ return courseID;}
    void setID(string ID){ courseID = ID;}
    string getTitle(){ return title;}
    void setTitle(string className){ title = className;}
    string getInstructor(){ return instructor;}
    void setInstructor(string prof){ instructor = prof;}
    string getLocation(){ return location;}
    void setLocation(string loc){ location = loc;}
    int getHours(){ return hours;}
    void setHours(int hrs){ hours = hrs;}
    int getClassNumber(){ return classNumber;}
    void setClassNumber(int classNum){classNumber = classNum;}
    string getTimeStart(){ return timeStart;}
    void setTimeStart(string timeS){ timeStart = timeS;}
    string getTimeEnd(){ return timeEnd;}
    void setTimeEnd(string timeE){ timeEnd = timeE;}
    string getDay(){ return dayOfWeek;}
    void setDay(string day){ dayOfWeek = day;}
    string getSemesters(){ return semester;}
    void setSemesters(string sem){ semester = sem;}
    
    // misc functions  
    void print(){
            cout << "semester is " << this->getSemesters() << endl;
            cout << "course ID is " << this->getID() << endl;
            cout << "title is " << this->getTitle() << endl;
            cout << "Hours is " << this->getHours() << endl;
            cout << "Class Number is " << this->getClassNumber() << endl;
            cout << "Days is " << this->getDay() << endl;
            cout << "Times are " << this->getTimeStart() << " to " << this->getTimeEnd() << endl;
            cout << "Location is " << this->getLocation() << endl;
            cout << "Instructor is " << this->getInstructor() << "\n\n";
    }
    
    void Tokenize(const string& str, vector<string>& tokens, const string& delimiters = " ")
    {
        tokenSize = 0;
        // Skip delimiters at beginning.
        string::size_type lastPos = str.find_first_not_of(delimiters, 0);
        // Find first "non-delimiter".
        string::size_type pos     = str.find_first_of(delimiters, lastPos);

        while (string::npos != pos || string::npos != lastPos)
        {
           // Found a token, add it to the vector.
           tokens.push_back(str.substr(lastPos, pos - lastPos));
           tokenSize++;
           // Skip delimiters.  Note the "not_of"
           lastPos = str.find_first_not_of(delimiters, pos);
           // Find next "non-delimiter"
           pos = str.find_first_of(delimiters, lastPos);
        }   
     }

    void convertToMilitary(string str, string &s){
        string one = "1", two = "2", three = "3", four = "4", five = "5",
               six = "6", seven = "7", eight = "8", nine = "9", ten = "10", eleven = "11";
        size_t find1 = str.find(one);
        size_t find2 = str.find(two);
        size_t find3 = str.find(three);
        size_t find4 = str.find(four);
        size_t find5 = str.find(five);
        size_t find6 = str.find(six);
        size_t find7 = str.find(seven);
        size_t find8 = str.find(eight);
        size_t find9 = str.find(nine);
        size_t find10 = str.find(ten);
        size_t find11 = str.find(eleven);
        string sp = " ";
    

            if(find1 != std::string::npos){
                if(find2 != std::string::npos)
                    s = str;
                else{
                    str.insert(0, sp);
                    str.replace(0, 2, "13");
                    s = str;
                }
             }
            else if(find2 != std::string::npos){
                str.insert(0, sp);
                str.replace(0, 2, "14");
                s = str;
            }
            else if(find3 != std::string::npos){
                str.insert(0, sp);
                str.replace(0, 2, "15");
                s = str;
            }
            else if(find4 != std::string::npos){
                str.insert(0, sp);
                str.replace(0, 2, "16");
                s = str;
            }
            else if(find5 != std::string::npos){
                str.insert(0, sp);
                str.replace(0, 2, "17");
                s = str;
            }
            else if(find6 != std::string::npos){
                str.insert(0, sp);
                str.replace(0, 2, "18");
                s = str;
            }
            else if(find7 != std::string::npos){
                str.insert(0, sp);
                str.replace(0, 2, "19");
                s = str;
            }
            else if(find8 != std::string::npos){
                str.insert(0, sp);
                str.replace(0, 2, "20");
                s = str;
            }
            else if(find9 != std::string::npos){
                str.insert(0, sp);
                str.replace(0, 2, "21");
                s = str;
            }
            else if(find10 != std::string::npos){
                str.replace(0, 2, "22");
                s = str;
            }
            else if(find11 != std::string::npos){
                str.replace(0, 2, "23");
                s = str;
            }
            else{ cout << "string = " << str << "\n &s = " << s << endl;
                s = str;}
            
    }
    
    void convertFromMilitary(string str, string &s){
        string pm = "PM", thirteen = "13", fourteen = "14", fifteen = "15", sixteen = "16", seventeen = "17", 
               eighteen = "18", nineteen = "19", twenty = "20", twentyone = "21", twentytwo = "22", twentythree = "23";
        size_t found = str.find(pm);
        size_t find1 = str.find(thirteen);
        size_t find2 = str.find(fourteen);
        size_t find3 = str.find(fifteen);
        size_t find4 = str.find(sixteen);
        size_t find5 = str.find(seventeen);
        size_t find6 = str.find(eighteen);
        size_t find7 = str.find(nineteen);
        size_t find8 = str.find(twenty);
        size_t find9 = str.find(twentyone);
        size_t find10 = str.find(twentytwo);
        size_t find11 = str.find(twentythree);
    
        if(found != std::string::npos){
            if(find1 != std::string::npos){
                str.replace(0, 2, " 1");
                s = str;
            }
            else if(find2 != std::string::npos){
                str.replace(0, 2, " 2");
                s = str;
            }
            else if(find3 != std::string::npos){
                str.replace(0, 2, " 3");
                s = str;
            }
            else if(find4 != std::string::npos){
                str.replace(0, 2, " 4");
                s = str;
            }
            else if(find5 != std::string::npos){
                str.replace(0, 2, " 5");
                s = str;
            }
            else if(find6 != std::string::npos){
                str.replace(0, 2, " 6");
                s = str;
            }
            else if(find7 != std::string::npos){
                str.replace(0, 2, " 7");
                s = str;
            }
            else if(find8 != std::string::npos){
                str.replace(0, 2, " 8");
                s = str;
            }
            else if(find9 != std::string::npos){
                str.replace(0, 2, " 9");
                s = str;
            }
            else if(find10 != std::string::npos){
                str.replace(0, 2, "10");
                s = str;
            }
            else if(find11 != std::string::npos){
                str.replace(0, 2, "11");
                s = str;
            }
            else
                s = str;
        }      
    }
    
    void setClasses(string str){
        vector<string> tokenV;
    
        // set course member variables
        Tokenize(str, tokenV, "?");
        int size = tokenSize;

        for(int i = 0; i < size; i++){
          string token = tokenV[i];
          
          // set course ID
          if(i == 0){
              this->setID(token);
          }
          // set title
          else if(i == 1){
              this->setTitle(token); 
          }
          // set hours
          else if(i == 2){
              int h = atoi(token.c_str());
              this->setHours(h);
          }
          // set semesters
          else if(i == 3){
              this->setSemesters(token);             
          }
          // set days
          else if(i == 4){
            this->setDay(token);
          }
          // set times
          else if(i == 5){
            string timeInput = tokenV[i];
            vector<string> timeToken;
            Tokenize(timeInput, timeToken, "-");
            string pm = "PM";
            size_t found = timeToken[0].find(pm);
            size_t found1 = timeToken[1].find(pm);
            
                if(found != std::string::npos){
                        string converted1 = "", converted2 = "";
                        convertToMilitary(timeToken[0], converted1);
                        convertToMilitary(timeToken[1], converted2);
                        this->setTimeStart(converted1);
                        this->setTimeEnd(converted2); 
                }
                else if(found == std::string::npos && found1 != std::string::npos){
                        string convert = "";
                        convertToMilitary(timeToken[1], convert);
                        this->setTimeStart(timeToken[0]);
                        this->setTimeEnd(convert);
                }
                else{
                        this->setTimeStart(timeToken[0]);
                        this->setTimeEnd(timeToken[1]);
                }
          }
          // set location
          else if(i == 6){
            this->setLocation(token);
          }
          // set instructor
          else if(i == 7){
            this->setInstructor(token);
          }
      }
   }

    bool findMonday(){
      string check = this->getDay();
      string mon = "Mon";
      size_t found = check.find(mon);
    
      if(found != std::string::npos)
         return true;
      else
         return false;
    }
    bool findTuesday(){
      string check = this->getDay();
      string tue = "Tue";
      size_t found = check.find(tue);
    
      if(found != std::string::npos)
          return true;
      else
          return false;
    }
    bool findWednesday(){
      string check = this->getDay();
      string wed = "Wed";
      size_t found = check.find(wed);
    
      if(found != std::string::npos)
          return true;
      else
          return false;
    }
    bool findThursday(){
      string check = this->getDay();
      string thu = "Thu";
      size_t found = check.find(thu);
    
      if(found != std::string::npos)
          return true;
      else
          return false;
    }
    bool findFriday(){
      string check = this->getDay();
      string fri = "Fri";
      size_t found = check.find(fri);
    
      if(found != std::string::npos)
          return true;
      else
          return false;
    }
    
    bool isStartLater(Course a){
        if(this->getTimeStart() > a.getTimeStart())
            return true;
        else
            return false;  
    }
    bool isStartBefore(Course a){
        if(this->getTimeStart() < a.getTimeStart()){
            cout << this->getTimeStart() << " and " << a.getTimeStart() << endl;
            return true;}
        else{
            cout << this->getTimeStart() << " and " << a.getTimeStart() << endl;
            return false;}  
    }
    bool isEndLater(Course a){
        if(this->getTimeEnd() > a.getTimeEnd())
            return true;
        else
            return false;  
    }
    bool isEndBefore(Course a){
        if(this->getTimeEnd() < a.getTimeEnd())
            return true;
        else
            return false;  
    }
};

void prints(Course listOfCourses[], int num){
        cout << "Monday classes: \n" << endl;    
    for (int i = 0; i<num; i++) {
        if(listOfCourses[i].findMonday() == true){
                cout << listOfCourses[i].getTitle() << endl;
                cout << listOfCourses[i].getLocation() << endl;
                cout << listOfCourses[i].getInstructor() << endl;}   
        cout << "    \n";
    }
    cout << "    \n\n";
   
    cout << "Tuesday classes: \n" << endl;   
    for (int i = 0; i<num; i++) {
        if(listOfCourses[i].findTuesday() == true){
                cout << listOfCourses[i].getTitle() << endl;
                cout << listOfCourses[i].getLocation() << endl;
                cout << listOfCourses[i].getInstructor() << endl; }
        cout << "    \n";
    }
    cout << "    \n\n";
    
    cout << "Wednesday classes: \n" << endl;  
    for (int i = 0; i<num; i++) {
        if(listOfCourses[i].findWednesday() == true){
                cout << listOfCourses[i].getTitle() << endl;
                cout << listOfCourses[i].getLocation() << endl;
                cout << listOfCourses[i].getInstructor() << endl;} 
        cout << "    \n";
    }
    cout << "    \n\n";
    
    cout << "Thursday classes: \n" << endl; 
    for (int i = 0; i<num; i++) {
        if(listOfCourses[i].findThursday() == true){
                cout << listOfCourses[i].getTitle() << endl;
                cout << listOfCourses[i].getLocation() << endl;
                cout << listOfCourses[i].getInstructor() << endl; }
        cout << "    \n";
    }
    cout << "    \n\n";
    
    cout << "Friday classes: \n" << endl;  
    for (int i = 0; i<num; i++) {
        if(listOfCourses[i].findFriday() == true){
                cout << listOfCourses[i].getTitle() << endl;
                cout << listOfCourses[i].getLocation() << endl;
                cout << listOfCourses[i].getInstructor() << endl;} 
        cout << "    \n";
    }
    cout << "    \n\n";
}

void printHTML(vector<Course> listOfCourses, int num){
ofstream output;
string outputFilename = "testing.html";
output.open(outputFilename.c_str());
 if (!output) {
     cerr << "Can't open output file " << outputFilename << endl;
     exit(1);
 } 
 else{
 output << "<html>" << endl;
 output << "<div id = 'sign-in' data-role = 'page'>" << endl;
 output << "<div data-role = 'header'>" << endl;
 output << "<h1>	Monday classes:	</h1>" << endl;

    for (int i = 0; i<num; i++) {
        if(listOfCourses.at(i).findMonday() == true){
                output << "<p>" << endl;
                output << listOfCourses.at(i).getTitle() << " - " << listOfCourses.at(i).getInstructor() 
                     << " at " << listOfCourses.at(i).getTimeStart() << " to " << listOfCourses.at(i).getTimeEnd() << endl;   
                output << "</p>" << endl;
        }
    }
   
    output << "<h1> Tuesday classes: </h1>" << endl;   
    for (int i = 0; i<num; i++) {
        if(listOfCourses.at(i).findTuesday() == true){
                output << "<p>" << endl;
                output << listOfCourses.at(i).getTitle() << " - " << listOfCourses.at(i).getInstructor() 
                     << " at " << listOfCourses.at(i).getTimeStart() << " to " << listOfCourses.at(i).getTimeEnd() << endl;
                output << "</p>" << endl;
        }
    }

    
    output << "<h1> Wednesday classes: </h1>" << endl;  
    for (int i = 0; i<num; i++) {
        if(listOfCourses.at(i).findWednesday() == true){
                output << "<p>" << endl;
                output << listOfCourses.at(i).getTitle() << " - " << listOfCourses.at(i).getInstructor() 
                     << " at " << listOfCourses.at(i).getTimeStart() << " to " << listOfCourses.at(i).getTimeEnd() << endl;
                output << "</p>" << endl;
        }
    }

    
    output << "<h1> Thursday classes: </h1>" << endl; 
    for (int i = 0; i<num; i++) {
        if(listOfCourses.at(i).findThursday() == true){
                output << "<p>" << endl;
                output << listOfCourses.at(i).getTitle() << " - " << listOfCourses.at(i).getInstructor() 
                     << " at " << listOfCourses.at(i).getTimeStart() << " to " << listOfCourses.at(i).getTimeEnd() << endl;   
                output << "</p>" << endl;
        }
    }

    
    output << "<h1>Friday classes: </h1>" << endl;  
    for (int i = 0; i<num; i++) {
        if(listOfCourses.at(i).findFriday() == true){
                output << "<p>" << endl;
                output << listOfCourses.at(i).getTitle() << " - " << listOfCourses.at(i).getInstructor() 
                     << " at " << listOfCourses.at(i).getTimeStart() << " to " << listOfCourses.at(i).getTimeEnd() << endl;
                output << "</p>" << endl;
        }
    }
 output << "</div>" << endl;
 output << "</div>" << endl;
 output << "</html>" << endl;
 cout << "write succesful\n";
 }
output.close();
}

void printDays(vector<Course> listOfCourses, int num){
    cout << "Monday classes: \n------------------------" << endl;    
    for (int i = 0; i<num; i++) {
        if(listOfCourses.at(i).findMonday() == true)
                cout << listOfCourses.at(i).getTitle() << " - " << listOfCourses.at(i).getInstructor() 
                     << " at " << listOfCourses.at(i).getTimeStart() << " to " << listOfCourses.at(i).getTimeEnd() << endl;   
    }
    cout << "    \n\n";
   
    cout << "Tuesday classes: \n------------------------" << endl;   
    for (int i = 0; i<num; i++) {
        if(listOfCourses.at(i).findTuesday() == true)
                cout << listOfCourses.at(i).getTitle() << " - " << listOfCourses.at(i).getInstructor() 
                     << " at " << listOfCourses.at(i).getTimeStart() << " to " << listOfCourses.at(i).getTimeEnd() << endl;
    }
    cout << "    \n\n";
    
    cout << "Wednesday classes: \n------------------------" << endl;  
    for (int i = 0; i<num; i++) {
        if(listOfCourses.at(i).findWednesday() == true)
                cout << listOfCourses.at(i).getTitle() << " - " << listOfCourses.at(i).getInstructor() 
                     << " at " << listOfCourses.at(i).getTimeStart() << " to " << listOfCourses.at(i).getTimeEnd() << endl;
    }
    cout << "    \n\n";
    
    cout << "Thursday classes: \n------------------------" << endl; 
    for (int i = 0; i<num; i++) {
        if(listOfCourses.at(i).findThursday() == true)
                cout << listOfCourses.at(i).getTitle() << " - " << listOfCourses.at(i).getInstructor() 
                     << " at " << listOfCourses.at(i).getTimeStart() << " to " << listOfCourses.at(i).getTimeEnd() << endl;
    }
    cout << "    \n\n";
    
    cout << "Friday classes: \n------------------------" << endl;  
    for (int i = 0; i<num; i++) {
        if(listOfCourses.at(i).findFriday() == true)
                cout << listOfCourses.at(i).getTitle() << " - " << listOfCourses.at(i).getInstructor() 
                     << " at " << listOfCourses.at(i).getTimeStart() << " to " << listOfCourses.at(i).getTimeEnd() << endl;
    }
    cout << "    \n\n";
}

bool operator<(Course c1, Course c2){
        if(c1.getTimeStart() < c2.getTimeStart())
                return true;
        else
                return false;
}

int main()
{
    Course listOfCourses[50];
    vector<Course> ListOfCourses;
    string classes[50];
    
    
    int numOfCourses=0;
    
    
    classes[0] = "MATH2554C-001?Calculus I?4?(Sp, Fa)?Mon, Wed, Fri ?10:45 AM-11:35 AM?WJWH0218?James Meek";
    classes[1] = "CHEM1113-001?University Chemistry for Engineers I?3?(Su, Fa)?Tue, Thu ?11:00 AM-12:15 PM?ARKU0424?Mya Norman";
    classes[2] = "PHYS2054-001?University Physics I?4?(Sp, Su, Fa)?Mon, Wed, Fri ?9:40 AM-10:30 AM?ARKU0424?Julio Gea-Banacloche";
    classes[3] = "GNEG1111-005?Introduction to Engineering I ?1?(Sp, Fa)?Mon, Wed ?2:00 PM-2:50 PM?ENGR0209?Leslie Massey";
    classes[4] = "ENGL1013-001?Composition I?3?(Sp, Su, Fa)?Mon, Wed, Fri ?7:30 AM-8:20 AM?MEMH0253?Pamela Kirkpatrick";
    
    
    for (int i = 0; classes[i] != ""; i++)
    {
        listOfCourses[i].setClasses(classes[i]);
        ListOfCourses.push_back(listOfCourses[i]);
        numOfCourses++;
    }
    
    //printDays (ListOfCourses, numOfCourses);
    
    sort(ListOfCourses.begin(), ListOfCourses.end());
 
    //printDays (ListOfCourses, numOfCourses);
    
    printHTML(ListOfCourses, numOfCourses);
        
    return 0;
}


