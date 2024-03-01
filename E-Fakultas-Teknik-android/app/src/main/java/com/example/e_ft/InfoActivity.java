package com.example.e_ft;

import android.os.Bundle;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import com.firebase.ui.database.FirebaseRecyclerAdapter;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;

public class InfoActivity extends AppCompatActivity {

    RecyclerView recyclerView;
    DatabaseReference ref;
    FirebaseDatabase database;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.fragment_download);

        recyclerView=findViewById(R.id.recyclerview);
        recyclerView.setHasFixedSize(true);

        recyclerView.setLayoutManager(new LinearLayoutManager(this));

        database=FirebaseDatabase.getInstance();
        ref=database.getReference("info");

    }

    @Override
    protected void onStart() {
        super.onStart();

        FirebaseRecyclerAdapter<Informasi, Holder> firebaseRecyclerAdapter =
                new FirebaseRecyclerAdapter<Informasi, Holder>(
                        Informasi.class,
                        R.layout.data,
                        Holder.class,
                        ref
                ) {
                    @Override
                    protected void populateViewHolder(Holder holder, Informasi informasi, int i) {

                        holder.setView(getApplicationContext(),informasi.getJudul_info());

                    }
                };
        recyclerView.setAdapter(firebaseRecyclerAdapter);
    }
}