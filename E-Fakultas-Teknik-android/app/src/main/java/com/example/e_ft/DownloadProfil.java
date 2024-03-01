package com.example.e_ft;

import android.app.DownloadManager;
import android.content.Context;
import android.net.Uri;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;

import com.google.android.gms.tasks.OnFailureListener;
import com.google.android.gms.tasks.OnSuccessListener;
import com.google.firebase.storage.FirebaseStorage;
import com.google.firebase.storage.StorageReference;

import static android.os.Environment.DIRECTORY_DOWNLOADS;

public class DownloadProfil extends AppCompatActivity {
    Button button1, button2, button3, button4;
    FirebaseStorage firebaseStorage;
    StorageReference storageReference;

    StorageReference ref1, ref2, ref3, ref4;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.fragment_profil);

        button1 = findViewById(R.id.b_tif);
        button2 = findViewById(R.id.b_tind);
        button3 = findViewById(R.id.b_elektro);
        button4 = findViewById(R.id.b_tendik);

        button1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                download1();
            }
        });
        button2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                download2();
            }
        });
        button3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                download3();
            }
        });
        button4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                download4();
            }
        });
    }

    public void download1() {
        storageReference = firebaseStorage.getInstance().getReference();
        ref1 = storageReference.child("file/profil-tif.pdf");

        ref1.getDownloadUrl().addOnSuccessListener(new OnSuccessListener<Uri>() {
            @Override
            public void onSuccess(Uri uri) {
                String url = uri.toString();
                downloadFile(DownloadProfil.this, "PROFILE DOSEN TEKNIK Informatika pdf", ".pdf", DIRECTORY_DOWNLOADS, url);

            }

        }).addOnFailureListener(new OnFailureListener() {
            @Override
            public void onFailure(@NonNull Exception e) {

            }
        });

    }
    public void download2() {
        storageReference = firebaseStorage.getInstance().getReference();
        ref2 = storageReference.child("file/profil-tind.pdf");

        ref2.getDownloadUrl().addOnSuccessListener(new OnSuccessListener<Uri>() {
            @Override
            public void onSuccess(Uri uri) {
                String url = uri.toString();
                downloadFile(DownloadProfil.this, "Final_Profil Dosen Jurusan Industri Mesin", ".pdf", DIRECTORY_DOWNLOADS, url);

            }

        }).addOnFailureListener(new OnFailureListener() {
            @Override
            public void onFailure(@NonNull Exception e) {

            }
        });

    }
    public void download3() {
        storageReference = firebaseStorage.getInstance().getReference();
        ref3 = storageReference.child("file/profil-elektro.pdf");

        ref3.getDownloadUrl().addOnSuccessListener(new OnSuccessListener<Uri>() {
            @Override
            public void onSuccess(Uri uri) {
                String url = uri.toString();
                downloadFile(DownloadProfil.this, "Profil Dosen Jurusan Elektro Baru", ".pdf", DIRECTORY_DOWNLOADS, url);

            }

        }).addOnFailureListener(new OnFailureListener() {
            @Override
            public void onFailure(@NonNull Exception e) {

            }
        });

    }
    public void download4() {
        storageReference = firebaseStorage.getInstance().getReference();
        ref4 = storageReference.child("file/profil-tendikft.pdf");

        ref4.getDownloadUrl().addOnSuccessListener(new OnSuccessListener<Uri>() {
            @Override
            public void onSuccess(Uri uri) {
                String url = uri.toString();
                downloadFile(DownloadProfil.this, "PROFILE Tenaga Kependidikan FT", ".pdf", DIRECTORY_DOWNLOADS, url);

            }

        }).addOnFailureListener(new OnFailureListener() {
            @Override
            public void onFailure(@NonNull Exception e) {

            }
        });

    }

    public void downloadFile(Context context, String fileName, String fileExtension, String destinationDirectory, String url) {
        DownloadManager downloadmanager = (DownloadManager) context.getSystemService(Context.DOWNLOAD_SERVICE);
        Uri uri = Uri.parse(url);
        DownloadManager.Request request = new DownloadManager.Request(uri);

        request.setNotificationVisibility(DownloadManager.Request.VISIBILITY_VISIBLE_NOTIFY_COMPLETED);
        request.setDestinationInExternalFilesDir(context, destinationDirectory, fileName + fileExtension);

        downloadmanager.enqueue(request);

    }

}