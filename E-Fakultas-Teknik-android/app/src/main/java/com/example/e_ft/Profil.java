package com.example.e_ft;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;

import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;

public class Profil extends Fragment {
    Button button1, button2, button3, button4;

    @Nullable
    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        View view = inflater.inflate(R.layout.fragment_profil, container, false);



        button1 = view.findViewById(R.id.b_tif);
        button2 = view.findViewById(R.id.b_tind);
        button3 = view.findViewById(R.id.b_elektro);
        button4 = view.findViewById(R.id.b_tendik);
        button1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String url = "http://teknik.trunojoyo.ac.id/pdf/PROFILE%20DOSEN%20TEKNIK%20Informatika%20pdf.pdf";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);

            }
        });
        button2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String url = "http://teknik.trunojoyo.ac.id/pdf/Final_Profil%20Dosen%20Jurusan%20Industri%20Mesin.pdf";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);
            }
        });
        button3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String url = "http://teknik.trunojoyo.ac.id/pdf/Profil%20Dosen%20Jurusan%20Elektro%20Baru.pdf";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);
            }
        });
        button4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String url = "http://teknik.trunojoyo.ac.id/pdf/PROFILE%20Tenaga%20Kependidikan%20FT.pdf";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);
            }
        });
        return view;
    }

}

