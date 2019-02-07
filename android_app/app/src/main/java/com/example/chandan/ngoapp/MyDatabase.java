package com.example.chandan.ngoapp;


import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;
import android.widget.Toast;

/**
 * Created by Chandan on 6/28/2018.
 */

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;
import android.widget.Toast;

/**
 * Created by Bhavesh on 6/19/2018.
 */

public class MyDatabase extends SQLiteOpenHelper {

    Context context;
    SQLiteDatabase db;

    MyDatabase(Context context)
    {
        super(context, "student.db", null, 1);    //
        this.context = context;                   //
        db = this.getWritableDatabase();          // Create Database with name student.db
    }

    @Override
    public void onCreate(SQLiteDatabase db) {
        String sql = "CREATE TABLE Student (rno INTEGER PRIMARY KEY, marks INTEGER)";
        db.execSQL(sql);
    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int i, int i1) { }

    public void addStudent(int rno, int marks)
    {
        ContentValues cv = new ContentValues();
        cv.put("rno",rno);
        cv.put("marks",marks);
        long rid = db.insert("Student", null, cv);
        if(rid < 0)
            Toast.makeText(context, "Cannot Insert", Toast.LENGTH_SHORT).show();
        else
            Toast.makeText(context, "Record Added", Toast.LENGTH_SHORT).show();
    }
    public int viewStudentCount() {

        Cursor cursor = db.query("Student", null, null, null, null, null, null);
        StringBuffer sb = new StringBuffer();
        cursor.moveToFirst();
        int count1=0;
        if (cursor.getCount() > 0)
            do {
                count1=count1+1;
            }while (cursor.moveToNext());
        return count1;
    }

    public String viewStudentGraph()
    {

        Cursor cursor =db.query("Student",null,null,null,null,null,null);
        StringBuffer sb =new StringBuffer();
        cursor.moveToFirst();

        if(cursor.getCount()>0)
        {
            do {
                sb.append(cursor.getString(1)+" ");
            }while (cursor.moveToNext());

        }
        return sb.toString();
    }


    public String viewStudent()
    {
        Cursor cursor = db.query("Student",null,null,null,null,null,null);
        StringBuffer sb = new StringBuffer();
        cursor.moveToFirst();

        if(cursor.getCount() > 0)
        {
            do {
                sb.append("Roll: "+ cursor.getString(0) +"\tMarks: "+cursor.getString(1)+"\n");
            }while (cursor.moveToNext());
        }

        return sb.toString();
    }



}