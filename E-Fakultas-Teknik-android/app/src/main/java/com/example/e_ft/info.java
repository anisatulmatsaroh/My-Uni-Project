package com.example.e_ft;

import android.os.Bundle;
import android.text.method.LinkMovementMethod;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;

public class info extends AppCompatActivity {

    EditText nama, email;
    Button post;
    TextView textView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.info);
        getSupportActionBar().setDisplayShowHomeEnabled(true);
        getSupportActionBar().setTitle("Fakultas Teknik UTM");
        getSupportActionBar().setLogo(R.drawable.utm);
        getSupportActionBar().setDisplayUseLogoEnabled(true);

        TextView textView = findViewById(R.id.txtLink);
        textView.setMovementMethod(LinkMovementMethod.getInstance());


        nama = (EditText) findViewById(R.id.teksNama);
        email = (EditText) findViewById(R.id.teksEmail);
        post = (Button) findViewById(R.id.btnPost);

        post.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if (nama.getText().toString().length() == 0) {
                    //jika form Nama belum di isi / masih kosong
                    nama.setError("Nama diperlukan!");
                } else if (email.getText().toString().length() == 0) {
                    //jika form Email belum di isi / masih kosong
                    email.setError("Email diperlukan!");
                } else {
                    //jika form sudah terisi semua
                    Toast.makeText(getApplicationContext(),
                            "Berhasil!",
                            Toast.LENGTH_SHORT).show();
                }
            }
        });

    }
}
