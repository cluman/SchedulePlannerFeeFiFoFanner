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


};


bool findMonday(Course c){
    string check = c.getDay();
    string mon = "Mon";
    size_t found = check.find(mon);
    
    if(found != std::string::npos)
        return true;
    else
        return false;
}
bool findTuesday(Course c){
    string check = c.getDay();
    string tue = "Tue";
    size_t found = check.find(tue);
    
    if(found != std::string::npos)
        return true;
    else
        return false;
}
bool findWednesday(Course c){
    string check = c.getDay();
    string wed = "Wed";
    size_t found = check.find(wed);
    
    if(found != std::string::npos)
        return true;
    else
        return false;
}
bool findThursday(Course c){
    string check = c.getDay();
    string thu = "Thu";
    size_t found = check.find(thu);
    
    if(found != std::string::npos)
        return true;
    else
        return false;
}
bool findFriday(Course c){
    string check = c.getDay();
    string fri = "Fri";
    size_t found = check.find(fri);
    
    if(found != std::string::npos)
        return true;
    else
        return false;
}


void printDays(Course c1, Course c2, Course c3, Course c4, Course c5){
    cout << "Monday classes: \n------------------------" << endl;
    
    if(findMonday(c1) == true)
        cout << c1.getTitle() << " - " << c1.getInstructor() << " at " << c1.getTimeStart() << " to " << c1.getTimeEnd() << endl;
    if(findMonday(c2) == true)
        cout << c2.getTitle() << " - " << c2.getInstructor() << " at " << c2.getTimeStart() << " to " << c2.getTimeEnd() << endl;
    if(findMonday(c3) == true)
        cout << c3.getTitle() << " - " << c3.getInstructor() << " at " << c3.getTimeStart() << " to " << c3.getTimeEnd() << endl;
    if(findMonday(c4) == true)
        cout << c4.getTitle() << " - " << c4.getInstructor() << " at " << c4.getTimeStart() << " to " << c4.getTimeEnd() << endl;
    if(findMonday(c5) == true)
        cout << c5.getTitle() << " - " << c5.getInstructor() << " at " << c5.getTimeStart() << " to " << c5.getTimeEnd() << endl;
        cout << "    \n\n";
    
    cout << "Tuesday classes: \n------------------------" << endl;
    
    if(findTuesday(c1) == true)
        cout << c1.getTitle() << " - " << c1.getInstructor() << " at " << c1.getTimeStart() << " to " << c1.getTimeEnd() << endl;
    if(findTuesday(c2) == true)
        cout << c2.getTitle() << " - " << c2.getInstructor() << " at " << c2.getTimeStart() << " to " << c2.getTimeEnd() << endl;
    if(findTuesday(c3) == true)
        cout << c3.getTitle() << " - " << c3.getInstructor() << " at " << c3.getTimeStart() << " to " << c3.getTimeEnd() << endl;
    if(findTuesday(c4) == true)
        cout << c4.getTitle() << " - " << c4.getInstructor() << " at " << c4.getTimeStart() << " to " << c4.getTimeEnd() << endl;
    if(findTuesday(c5) == true)
        cout << c5.getTitle() << " - " << c5.getInstructor() << " at " << c5.getTimeStart() << " to " << c5.getTimeEnd() << endl;
        cout << "    \n\n";
    
    cout << "Wednesday classes: \n------------------------" << endl;
    
    if(findWednesday(c1) == true)
        cout << c1.getTitle() << " - " << c1.getInstructor() << " at " << c1.getTimeStart() << " to " << c1.getTimeEnd() << endl;
    if(findWednesday(c2) == true)
        cout << c2.getTitle() << " - " << c2.getInstructor() << " at " << c2.getTimeStart() << " to " << c2.getTimeEnd() << endl;
    if(findWednesday(c3) == true)
        cout << c3.getTitle() << " - " << c3.getInstructor() << " at " << c3.getTimeStart() << " to " << c3.getTimeEnd() << endl;
    if(findWednesday(c4) == true)
        cout << c4.getTitle() << " - " << c4.getInstructor() << " at " << c4.getTimeStart() << " to " << c4.getTimeEnd() << endl;
    if(findWednesday(c5) == true)
        cout << c5.getTitle() << " - " << c5.getInstructor() << " at " << c5.getTimeStart() << " to " << c5.getTimeEnd() << endl;
        cout << "    \n\n";
    
    cout << "Thursday classes: \n------------------------" << endl;
    
    if(findThursday(c1) == true)
        cout << c1.getTitle() << " - " << c1.getInstructor() << " at " << c1.getTimeStart() << " to " << c1.getTimeEnd() << endl;
    if(findThursday(c2) == true)
        cout << c2.getTitle() << " - " << c2.getInstructor() << " at " << c2.getTimeStart() << " to " << c2.getTimeEnd() << endl;
    if(findThursday(c3) == true)
        cout << c3.getTitle() << " - " << c3.getInstructor() << " at " << c3.getTimeStart() << " to " << c3.getTimeEnd() << endl;
    if(findThursday(c4) == true)
        cout << c4.getTitle() << " - " << c4.getInstructor() << " at " << c4.getTimeStart() << " to " << c4.getTimeEnd() << endl;
    if(findThursday(c5) == true)
        cout << c5.getTitle() << " - " << c5.getInstructor() << " at " << c5.getTimeStart() << " to " << c5.getTimeEnd() << endl;
        cout << "    \n\n";
    
    cout << "Friday classes: \n------------------------" << endl;
    
    if(findFriday(c1) == true)
        cout << c1.getTitle() << " - " << c1.getInstructor() << " at " << c1.getTimeStart() << " to " << c1.getTimeEnd() << endl;
    if(findFriday(c2) == true)
        cout << c2.getTitle() << " - " << c2.getInstructor() << " at " << c2.getTimeStart() << " to " << c2.getTimeEnd() << endl;
    if(findFriday(c3) == true)
        cout << c3.getTitle() << " - " << c3.getInstructor() << " at " << c3.getTimeStart() << " to " << c3.getTimeEnd() << endl;
    if(findFriday(c4) == true)
        cout << c4.getTitle() << " - " << c4.getInstructor() << " at " << c4.getTimeStart() << " to " << c4.getTimeEnd() << endl;
    if(findFriday(c5) == true)
        cout << c5.getTitle() << " - " << c5.getInstructor() << " at " << c5.getTimeStart() << " to " << c5.getTimeEnd() << endl;
        cout << "    \n\n";
}


void print(Course c){
            cout << "status is " << c.getStatus() << endl;
            cout << "course ID is " << c.getID() << endl;
            cout << "title is " << c.getTitle() << endl;
            cout << "Hours is " << c.getHours() << endl;
            cout << "Class Number is " << c.getClassNumber() << endl;
            cout << "Days is " << c.getDay() << endl;
            cout << "Times are " << c.getTimeStart() << " to " << c.getTimeEnd() << endl;
            cout << "Location is " << c.getLocation() << endl;
            cout << "Instructor is " << c.getInstructor() << "\n\n";
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

int main()
{
    string open = "Open";
    vector<string> token1, token2, token3, token4, token5;
    Course::Course c1, c2, c3, c4, c5;
    
    string class1 = "Open?MATH2554C-001?Calculus I?4?4675?Mon, Wed, Fri ? 10:45 AM - 11:35 AM?WJWH0218?James Meek";
    string class2 = "Closed?CHEM1113-001?University Chemistry for Engineers I (Su, Fa)?3?7263??Tue, Thu ? 11:00 AM - 12:15 PM?ARKU0424?Mya Norman";
    string class3 = "Closed?PHYS2054-001?University Physics I(Sp, Su, Fa)?4?2576?Mon, Wed, Fri ? 9:40 AM - 10:30 AM?ARKU0424?Julio Gea-Banacloche";
    string class4 = "Open?GNEG1111-005?Introduction to Engineering I (Sp, Fa)?1?5739?Mon, Wed ? 2:00 PM - 2:50 PM?ENGR0209?Leslie Massey";
    string class5 = "Open?ENGL1013-001?Composition I(Sp, Su, Fa)?3?1181?Mon, Wed, Fri ? 7:30 AM - 8:20 AM?MEMH0253?Pamela Kirkpatrick";

    // set course c1 member variables
    Tokenize(class1, token1, "?");
    int size = tokenSize;

    for(int i = 0; i < size; i++){
        string token = token1[i];

        // set status of class
        if(i == 0){
            if(token.compare(open) != 0)
                c1.setStatus(false);
            else 
                c1.setStatus(true);
        }
        // set course ID
        else if(i == 1){
            c1.setID(token);
        }
        // set title
        else if(i == 2){
            c1.setTitle(token); 
        }
        // set hours
        else if(i == 3){
            int h = atoi(token.c_str());
            c1.setHours(h);
        }
        // set class number
        else if(i == 4){
            int c = atoi(token.c_str());
            c1.setClassNumber(c);
        }
        // set days
        else if(i == 5){
            c1.setDay(token);
        }
        // set times
        else if(i == 6){
            string timeInput = token1[i];
            vector<string> timeToken;
            Tokenize(timeInput, timeToken, "-");
          
            c1.setTimeStart(timeToken[0]);
            c1.setTimeEnd(timeToken[1]);       
        }
        // set location
        else if(i == 7){
            c1.setLocation(token);
        }
        // set instructor
        else if(i == 8){
            c1.setInstructor(token);
        }
    }
       
    Tokenize(class2, token2, "?");

    for(int i = 0; i < size; i++){
        string token = token2[i];
        // set status of class
        if(i == 0){
            if(token.compare(open) != 0)
                c2.setStatus(false);
            else 
                c2.setStatus(true);
        }
        // set course ID
        else if(i == 1){
            c2.setID(token);
        }
        // set title
        else if(i == 2){
            c2.setTitle(token); 
        }
        // set hours
        else if(i == 3){
            int h = atoi(token.c_str());
            c2.setHours(h);
        }
        // set class number
        else if(i == 4){
            int c = atoi(token.c_str());
            c2.setClassNumber(c);
        }
        // set days
        else if(i == 5){
            c2.setDay(token);
        }
        // set times
        else if(i == 6){
            string timeInput = token2[i];
            vector<string> timeToken;
            Tokenize(timeInput, timeToken, "-");
          
            c2.setTimeStart(timeToken[0]);
            c2.setTimeEnd(timeToken[1]);       
        }
        // set location
        else if(i == 7){
            c2.setLocation(token);
        }
        // set instructor
        else if(i == 8){
            c2.setInstructor(token);
        }
    } 
    
    Tokenize(class3, token3, "?");
    
    for(int i = 0; i < size; i++){
        string token = token3[i];
        // set status of class
        if(i == 0){
            if(token.compare(open) != 0)
                c3.setStatus(false);
            else 
                c3.setStatus(true);
        }
        // set course ID
        else if(i == 1){
            c3.setID(token);
        }
        // set title
        else if(i == 2){
            c3.setTitle(token); 
        }
        // set hours
        else if(i == 3){
            int h = atoi(token.c_str());
            c3.setHours(h);
        }
        // set class number
        else if(i == 4){
            int c = atoi(token.c_str());
            c3.setClassNumber(c);
        }
        // set days
        else if(i == 5){
            c3.setDay(token);
        }
        // set times
        else if(i == 6){
            string timeInput = token3[i];
            vector<string> timeToken;
            Tokenize(timeInput, timeToken, "-");
          
            c3.setTimeStart(timeToken[0]);
            c3.setTimeEnd(timeToken[1]);       
        }
        // set location
        else if(i == 7){
            c3.setLocation(token);
        }
        // set instructor
        else if(i == 8){
            c3.setInstructor(token);
        }
    } 
    
    Tokenize(class4, token4, "?");

    for(int i = 0; i < size; i++){
        string token = token4[i];
        // set status of class
        if(i == 0){
            if(token.compare(open) != 0)
                c4.setStatus(false);
            else
                c4.setStatus(true);
        }
        // set course ID
        else if(i == 1){
            c4.setID(token);
        }
        // set title
        else if(i == 2){
            c4.setTitle(token); 
        }
        // set hours
        else if(i == 3){
            int h = atoi(token.c_str());
            c4.setHours(h);
        }
        // set class number
        else if(i == 4){
            int c = atoi(token.c_str());
            c4.setClassNumber(c);
        }
        // set days
        else if(i == 5){
            c4.setDay(token);
        }
        // set times
        else if(i == 6){
            string timeInput = token4[i];
            vector<string> timeToken;
            Tokenize(timeInput, timeToken, "-");
          
            c4.setTimeStart(timeToken[0]);
            c4.setTimeEnd(timeToken[1]);       
        }
        // set location
        else if(i == 7){
            c4.setLocation(token);
        }
        // set instructor
        else if(i == 8){
            c4.setInstructor(token);
        }        
    } 
    
    Tokenize(class5, token5, "?");

    for(int i = 0; i < size; i++){
        string token = token5[i];
        // set status of class
        if(i == 0){
            if(token.compare(open) != 0)
                c5.setStatus(false);
            else 
                c5.setStatus(true);
        }
        // set course ID
        else if(i == 1){
            c5.setID(token);
        }
        // set title
        else if(i == 2){
            c5.setTitle(token); 
        }
        // set hours
        else if(i == 3){
            int h = atoi(token.c_str());
            c5.setHours(h);
        }
        // set class number
        else if(i == 4){
            int c = atoi(token.c_str());
            c5.setClassNumber(c);
        }
        // set days
        else if(i == 5){
            c5.setDay(token);
        }
        // set times
        else if(i == 6){
            string timeInput = token5[i];
            vector<string> timeToken;
            Tokenize(timeInput, timeToken, "-");
          
            c5.setTimeStart(timeToken[0]);
            c5.setTimeEnd(timeToken[1]);       
        }
        // set location
        else if(i == 7){
            c5.setLocation(token);
        }
        // set instructor
        else if(i == 8){
            c5.setInstructor(token);
        }
    } 

    printDays(c5, c3, c1, c2, c4);

    
    return 0;
}

