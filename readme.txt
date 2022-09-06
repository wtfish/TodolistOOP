Service : business logic, input user ke repository, 
            menata data mentah ke UI.
repository : logic ke database, mengelola entity
entity : kelas yang akan disimpan
view : mengatur / memilih service

dibuat dari entity->repository->service->view

*membuat interface dulu agar mudah mocking saat unit test
