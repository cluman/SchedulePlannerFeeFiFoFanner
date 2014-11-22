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







using namespace std;
int tokenSize;
   
class Course{
private:
    bool status;
    string courseID, title, instructor, location, dayOfWeek, timeStart, timeEnd;
    int hours, classNumber;

public:
    // constructors
    Course(){ status = false; courseID = ""; title = ""; instructor = "";
        location = ""; hours = 0; classNumber = 0; dayOfWeek = "";
        timeStart = "", timeEnd = ""; 
    }
    Course(bool open, string ID, string className, string prof, string loc, 
           int hrs, int classNum, string day, string timeS, string timeE){
        status = open; courseID = ID; title = className; instructor = prof;
        location = loc; hours = hrs; classNumber = classNum; dayOfWeek = day;
        timeStart = timeS, timeEnd = timeE;
    }
    
    // getters and setters
    bool getStatus(){ return status;}
    void setStatus(bool open){ status = open;}
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
    
    // misc functions
    void print(){
            cout << "status is " << this->getStatus() << endl;
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

    void setClasses(string str){
        string open = "Open";
        vector<string> tokenV;
    
        // set course member variables
        Tokenize(str, tokenV, "?");
        int size = tokenSize;

        for(int i = 0; i < size; i++){
          string token = tokenV[i];

          // set status of class
          if(i == 0){
              if(token.compare(open) != 0)
                  this->setStatus(false);
              else 
                  this->setStatus(true);
          }
          // set course ID
          else if(i == 1){
              this->setID(token);
          }
          // set title
          else if(i == 2){
              this->setTitle(token); 
          }
          // set hours
          else if(i == 3){
             int h = atoi(token.c_str());
             this->setHours(h);
          }
          // set class number
          else if(i == 4){
            int x = atoi(token.c_str());
            this->setClassNumber(x);
          }
          // set days
          else if(i == 5){
            this->setDay(token);
          }
          // set times
          else if(i == 6){
            string timeInput = tokenV[i];
            vector<string> timeToken;
            Tokenize(timeInput, timeToken, "-");
          
            this->setTimeStart(timeToken[0]);
            this->setTimeEnd(timeToken[1]);       
          }
          // set location
          else if(i == 7){
            this->setLocation(token);
          }
          // set instructor
          else if(i == 8){
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
};


void printDays(Course listOfCourses[], int num){
    cout << "Monday classes: \n------------------------" << endl;    
    for (int i = 0; i<num; i++) {
        if(listOfCourses[i].findMonday() == true)
                cout << listOfCourses[i].getTitle() << " - " << listOfCourses[i].getInstructor() << " at " << listOfCourses[i].getTimeStart() << " to " << listOfCourses[i].getTimeEnd() << endl;
        
    }
    cout << "    \n\n";
   
    cout << "Tuesday classes: \n------------------------" << endl;   
    for (int i = 0; i<num; i++) {
        if(listOfCourses[i].findTuesday() == true)
                cout << listOfCourses[i].getTitle() << " - " << listOfCourses[i].getInstructor() << " at " << listOfCourses[i].getTimeStart() << " to " << listOfCourses[i].getTimeEnd() << endl;
    }
    cout << "    \n\n";
    
    cout << "Wednesday classes: \n------------------------" << endl;  
    for (int i = 0; i<num; i++) {
        if(listOfCourses[i].findWednesday() == true)
                cout << listOfCourses[i].getTitle() << " - " << listOfCourses[i].getInstructor() << " at " << listOfCourses[i].getTimeStart() << " to " << listOfCourses[i].getTimeEnd() << endl;
    }
    cout << "    \n\n";
    
    cout << "Thursday classes: \n------------------------" << endl; 
    for (int i = 0; i<num; i++) {
        if(listOfCourses[i].findThursday() == true)
                cout << listOfCourses[i].getTitle() << " - " << listOfCourses[i].getInstructor() << " at " << listOfCourses[i].getTimeStart() << " to " << listOfCourses[i].getTimeEnd() << endl;
    }
    cout << "    \n\n";
    
    cout << "Friday classes: \n------------------------" << endl;  
    for (int i = 0; i<num; i++) {
        if(listOfCourses[i].findFriday() == true)
                cout << listOfCourses[i].getTitle() << " - " << listOfCourses[i].getInstructor() << " at " << listOfCourses[i].getTimeStart() << " to " << listOfCourses[i].getTimeEnd() << endl;
    }
    cout << "    \n\n";
}

int main()
{

    Course listOfCourses[50];
    string classes[50];
    
    int numOfCourses=0;
    
    classes[0] = "Open?MATH2554C-001?Calculus I?4?4675?Mon, Wed, Fri ? 10:45 AM - 11:35 AM?WJWH0218?James Meek";
    classes[1] = "Closed?CHEM1113-001?University Chemistry for Engineers I (Su, Fa)?3?7263??Tue, Thu ? 11:00 AM - 12:15 PM?ARKU0424?Mya Norman";
    classes[2] = "Closed?PHYS2054-001?University Physics I(Sp, Su, Fa)?4?2576?Mon, Wed, Fri ? 9:40 AM - 10:30 AM?ARKU0424?Julio Gea-Banacloche";
    classes[3] = "Open?GNEG1111-005?Introduction to Engineering I (Sp, Fa)?1?5739?Mon, Wed ? 2:00 PM - 2:50 PM?ENGR0209?Leslie Massey";
    classes[4] = "Open?ENGL1013-001?Composition I(Sp, Su, Fa)?3?1181?Mon, Wed, Fri ? 7:30 AM - 8:20 AM?MEMH0253?Pamela Kirkpatrick";
    
    
    for (int i = 0; classes[i] != ""; i++)
    {
        listOfCourses[i].setClasses(classes[i]);
        numOfCourses++;
    }
    
    printDays (listOfCourses, numOfCourses);
    
    return 0;
}
