package com.example.chandan.ngoapp;

import android.support.annotation.NonNull;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.util.Log;

import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.database.DataSnapshot;
import com.google.firebase.database.DatabaseError;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ValueEventListener;

import java.util.ArrayList;

import maes.tech.intentanim.CustomIntent;

public class StatusActivity extends AppCompatActivity {
    private static final String TAG ="StatusActivity" ;
    private DatabaseReference mDatabaseRef;
    private FirebaseAuth auth;
    private RecyclerView recyclerView;
    private AssetAdapter adapter;
    private ArrayList<Asset> list;
    private ArrayList<String> keylist;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_status);
        auth = FirebaseAuth.getInstance();
        list = new ArrayList<>();
        keylist = new ArrayList<>();
        mDatabaseRef = FirebaseDatabase.getInstance().getReference("assets");
        Log.d(TAG, "onCreate: HERE====================================");
        mDatabaseRef.addValueEventListener(new ValueEventListener() {
            @Override
            public void onDataChange(@NonNull DataSnapshot dataSnapshot) {
                list.clear();
                for (DataSnapshot d : dataSnapshot.getChildren()) {
                    Asset asset = d.getValue(Asset.class);
                    Log.d(TAG, "onDataChange: " + asset.getUserId());
                    if(asset.getUserId().equals(auth.getUid())){
                        list.add(asset);
                    }else{
                        continue;
                    }
                }

                adapter.notifyDataSetChanged();

            }
            @Override
            public void onCancelled(@NonNull DatabaseError databaseError) {

            }
        });
        recyclerView = (RecyclerView) findViewById(R.id.recycler_view);
        LinearLayoutManager layoutManager = new LinearLayoutManager(this);
        recyclerView.setLayoutManager(layoutManager);
        adapter = new AssetAdapter(this, list,0);
        recyclerView.setAdapter(adapter);
    }

    @Override
    public void onBackPressed() {
        super.onBackPressed();
        CustomIntent.customType(this,"right-to-left");

    }
}
