package com.example.chandan.ngoapp;
import android.content.Intent;
import android.content.SharedPreferences;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

import com.afollestad.materialdialogs.MaterialDialog;

import maes.tech.intentanim.CustomIntent;

public class MainActivity extends AppCompatActivity {
    private String authority;
    private String branch;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        SharedPreferences pref = getApplicationContext().getSharedPreferences("MyPref", MODE_PRIVATE);
        final SharedPreferences.Editor editor = pref.edit();

        if (pref.getString("authority", null)==null) {
            new MaterialDialog.Builder(MainActivity.this)
                    .title("Authority")
                    .items(R.array.array1)
                    .itemsCallbackSingleChoice(-1, new MaterialDialog.ListCallbackSingleChoice() {
                        @Override
                        public boolean onSelection(MaterialDialog dialog, View view, int which, CharSequence text) {
                            authority = text.toString();
                            editor.putString("authority", text.toString());
                            editor.commit();
                            if (text.toString().equals("Teacher")|| text.toString().equals("PurchaseOfficer")){
                                new MaterialDialog.Builder(MainActivity.this)
                                        .title("Select your class")
                                        .items(R.array.array2)
                                        .itemsCallbackSingleChoice(-1, new MaterialDialog.ListCallbackSingleChoice() {
                                            @Override
                                            public boolean onSelection(MaterialDialog dialog, View view, int which, CharSequence text) {
                                                editor.putString("department", text.toString());
                                                editor.commit();
                                                if(authority.equals("Teacher")) {
                                                    startActivity(new Intent(MainActivity.this, TeacherDashboard.class));
                                                    CustomIntent.customType(MainActivity.this,"fadein-to-fadeout");
                                                    finish();
                                                }else if(authority.equals("PurchaseOfficer")){
                                                    startActivity(new Intent(MainActivity.this, PODashboard.class));
                                                    CustomIntent.customType(MainActivity.this,"fadein-to-fadeout");
                                                    finish();
                                                }
                                                return true;
                                            }
                                        }).positiveText("Confirm")
                                        .show();
                            }else{
                                startActivity(new Intent(MainActivity.this, PrincDashboard.class));
                                CustomIntent.customType(MainActivity.this,"fadein-to-fadeout");
                                finish();
                            }
                            return true;
                        }
                    }).positiveText("Confirm")
                    .show();
        }else if(pref.getString("authority", null).equals("Teacher")){
            startActivity(new Intent(MainActivity.this, TeacherDashboard.class));
            CustomIntent.customType(MainActivity.this,"fadein-to-fadeout");
            finish();
        }else if(pref.getString("authority", null).equals("PurchaseOfficer")){
            startActivity(new Intent(MainActivity.this, PODashboard.class));
            CustomIntent.customType(MainActivity.this,"fadein-to-fadeout");

            finish();
        }else if(pref.getString("authority", null).equals("Principal")){
            startActivity(new Intent(MainActivity.this, PrincDashboard.class));
            CustomIntent.customType(MainActivity.this,"fadein-to-fadeout");
            finish();
        }
    }
}
